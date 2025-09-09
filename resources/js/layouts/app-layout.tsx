import AppLayoutTemplate from '@/layouts/app/app-sidebar-layout';
import { playAudio } from '@/lib/audios/play-audio-message';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { SharedData, type BreadcrumbItem } from '@/types';
import { usePage } from '@inertiajs/react';
import { useEffect, type ReactNode } from 'react';
import { Toaster } from 'react-hot-toast';

interface AppLayoutProps {
    children: ReactNode;
    breadcrumbs?: BreadcrumbItem[];
}

export default function AppLayout({ children, breadcrumbs, ...props }: AppLayoutProps) {
    const { flash } = usePage<SharedData>().props;

    useEffect(() => {
        if (flash.success) {
            notifyToast.success(flash?.success);
            playAudio('success');
        }
        if (flash.error) {
            notifyToast.error(flash?.error);
            playAudio('error');
        }
        return () => {
            flash.success = undefined;
            flash.error = undefined;
        };
    }, [flash]);
    return (
        <AppLayoutTemplate breadcrumbs={breadcrumbs} {...props}>
            {children}
            <Toaster />
        </AppLayoutTemplate>
    );
}
