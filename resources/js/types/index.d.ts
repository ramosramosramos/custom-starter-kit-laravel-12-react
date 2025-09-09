import { LucideIcon } from 'lucide-react';
import type { Config } from 'ziggy-js';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    flash: Flash;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;
    [key: string]: unknown;
}

export type Flash = {
    success?: string;
    error?: string;
};

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    can: Can;
    [key: string]: unknown; // This allows for additional properties...
}

export type Prettify<T> = {
    [K in keyof T]: T[K];
} & {};
export type OmitKeys<T, K extends keyof T> = Omit<T, K>;
export type FormAbility = 'create' | 'edit';

export type FormDataType<T extends { [key: string]: string | number | boolean | undefined }> = T;

export type Filter = FormDataType<{
    search?: string;
}>;

export type Can = {
    backup_view: string;
    backup_generate: string;
    backup_download: string;
    backup_delete: string;
    user_view: string;
    user_create: string;
    user_update: string;
    user_delete: string;
    role_view: string;
    role_create: string;
    role_update: string;
    role_delete: string;
    permission_view: string;
    permission_create: string;
    permission_update: string;
    permission_delete: string;
};
