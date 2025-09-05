import { cn } from '@/lib/utils';
import { ComponentProps } from 'react';

export default function NoSearchFound({ className, title, ...props }: ComponentProps<'div'>) {
    return (
        <span className={cn('text-center text-xs text-primary', className)} {...props}>
            No search found <span className="font-bold text-red-600">"{title}"</span>.
        </span>
    );
}
