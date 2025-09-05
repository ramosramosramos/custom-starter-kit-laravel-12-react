import { cn } from '@/lib/utils';
import { ComponentProps } from 'react';

export default function NoAvailable({ className, title, ...props }: ComponentProps<'div'>) {
    return (
        <div className={cn('text-center text-2xl text-primary', className)} {...props}>
            {title}
        </div>
    );
}
