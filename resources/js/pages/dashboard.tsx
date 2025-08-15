import { Button } from '@/components/ui/button';
import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { playAudio } from '@/lib/audios/play-audio-message';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { type BreadcrumbItem } from '@/types';

import { Head } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];


export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                    </div>
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                    </div>
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                    </div>
                </div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                    <div className='flex justify-center p-5 flex-wrap  gap-5'>
                        <Button onClick={() => {
                            notifyToast.success('Success Toast')
                            playAudio('success')

                        }}>
                            Success Toast with success sound
                        </Button>
                        <Button onClick={() => {
                            notifyToast.error('Error Toast')
                            playAudio('error')
                        }}>
                            Error Toast with error sound
                        </Button>
                        <Button onClick={() => notifyToast.loading('Loading Toast')}>
                            Loading Toast
                        </Button>
                        <Button onClick={() => notifyToast.dismiss()}>
                            Remove All Toast
                        </Button>
                        <Button onClick={() => {
                            notifyToast('Info Toast')
                            playAudio('info')
                        }}>
                            Info Toast with info sound
                        </Button>
                        <Button onClick={() => {
                            notifyToast('Message received toast')
                            playAudio('message')
                        }}>
                            Message received toast
                        </Button>

                    </div>
                    <div className="flex justify-center flex-col items-center border p-2 gap-5">
                        This is for Laravel logs.
                        Make sure to configure the authorization in AppServiceProvider— it's the logViewerRule method.
                        <a href="/log-viewer" className="text-white bg-blue-500 p-2 rounded-md">
                            View Laravel Logs
                        </a>
                    </div>

                </div>
            </div>
        </AppLayout>
    );
}
