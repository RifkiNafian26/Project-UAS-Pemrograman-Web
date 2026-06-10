const partnerForm = document.getElementById('partnerForm');

if (partnerForm) {
    const firstStep = partnerForm.querySelector('[data-step="first"]');
    const secondStep = partnerForm.querySelector('[data-step="second"]');
    const confirmationStep = partnerForm.querySelector('[data-step="confirmation"]');
    const sourceCheckboxes = partnerForm.querySelectorAll('input[name="source[]"]');
    const agreement = document.getElementById('agreement');
    const submitButton = document.getElementById('submitButton');
    const summaries = {
        nama: document.getElementById('summaryNama'),
        whatsapp: document.getElementById('summaryWhatsapp'),
        statusLokasi: document.getElementById('summaryStatusLokasi'),
        lokasi: document.getElementById('summaryLokasi'),
        pulau: document.getElementById('summaryPulau'),
        source: document.getElementById('summarySource'),
    };

    const getFieldValue = (selector) => {
        return partnerForm.querySelector(selector)?.value.trim() || '-';
    };

    const scrollToStep = (step) => {
        const navbarOffset = 104;
        const targetPosition = step.getBoundingClientRect().top + window.scrollY - navbarOffset;

        window.scrollTo({
            top: Math.max(targetPosition, 0),
            behavior: 'auto',
        });
    };

    const revealStep = (step, shouldScroll = true) => {
        if (!step.classList.contains('is-hidden')) {
            return;
        }

        step.classList.remove('is-hidden');
        step.setAttribute('aria-hidden', 'false');

        if (shouldScroll) {
            setTimeout(() => scrollToStep(step), 180);
        }
    };

    const isFirstStepComplete = () => {
        const requiredFields = firstStep.querySelectorAll('input[required], select[required]');

        return Array.from(requiredFields).every((field) => {
            if (field.type === 'radio') {
                return partnerForm.querySelector(`input[name="${field.name}"]:checked`);
            }

            return field.value.trim() !== '' && field.checkValidity();
        });
    };

    const isSecondStepComplete = () => {
        return Array.from(sourceCheckboxes).some((checkbox) => checkbox.checked);
    };

    const updateSummary = () => {
        const selectedStatus = partnerForm.querySelector('input[name="status_lokasi"]:checked');
        const selectedSources = Array.from(sourceCheckboxes)
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.closest('.checkbox-label').querySelector('.checkbox-text').textContent.trim());

        summaries.nama.textContent = getFieldValue('#nama');
        summaries.whatsapp.textContent = getFieldValue('#whatsapp');
        summaries.statusLokasi.textContent = selectedStatus
            ? selectedStatus.closest('.radio-label').querySelector('.radio-text').textContent.trim()
            : '-';
        summaries.lokasi.textContent = getFieldValue('#lokasi');
        summaries.pulau.textContent = getFieldValue('#pulau');
        summaries.source.textContent = selectedSources.length ? selectedSources.join(', ') : '-';
    };

    const updateFormProgress = () => {
        if (isFirstStepComplete()) {
            revealStep(secondStep);
        }

        if (isSecondStepComplete()) {
            revealStep(confirmationStep);
        }

        submitButton.disabled = !agreement.checked;
        updateSummary();
    };

    partnerForm.addEventListener('input', updateFormProgress);
    partnerForm.addEventListener('change', updateFormProgress);

    partnerForm.addEventListener('submit', (event) => {
        updateSummary();

        if (!isFirstStepComplete()) {
            event.preventDefault();
            scrollToStep(firstStep);
            return;
        }

        if (!isSecondStepComplete()) {
            event.preventDefault();
            revealStep(secondStep);
            return;
        }

        if (!agreement.checked) {
            event.preventDefault();
            revealStep(confirmationStep);
            return;
        }
    });
}
