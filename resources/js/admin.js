import './bootstrap';

import Alpine from 'alpinejs';
import {
    ArrowLeft,
    CircleHelp,
    ExternalLink,
    Eye,
    Filter,
    LayoutDashboard,
    LogOut,
    Menu,
    Package,
    Pencil,
    Plus,
    Quote,
    RotateCcw,
    Save,
    Trash2,
    UserRound,
    Users,
    X,
    createIcons,
} from 'lucide';

window.Alpine = Alpine;

Alpine.start();

const renderIcons = () => createIcons({
    icons: {
        ArrowLeft,
        CircleHelp,
        ExternalLink,
        Eye,
        Filter,
        LayoutDashboard,
        LogOut,
        Menu,
        Package,
        Pencil,
        Plus,
        Quote,
        RotateCcw,
        Save,
        Trash2,
        UserRound,
        Users,
        X,
    },
});

document.addEventListener('DOMContentLoaded', renderIcons);
document.addEventListener('alpine:initialized', renderIcons);
