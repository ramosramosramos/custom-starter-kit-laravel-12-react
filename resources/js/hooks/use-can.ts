import { SharedData } from '@/types';
import { usePage } from '@inertiajs/react';

export function useCan() {
    return usePage<SharedData>().props.auth?.user?.can;
}
