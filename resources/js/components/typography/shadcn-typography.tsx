import { cn } from '@/lib/utils';
import { ComponentProps } from 'react';

export function TypographyH1({ className, children }: ComponentProps<'h1'>) {
    return <h1 className={cn('scroll-m-20 text-center text-4xl font-extrabold tracking-tight text-balance', className)}>{children}</h1>;
}
export function TypographyH2({ className, children }: ComponentProps<'h2'>) {
    return <h2 className={cn('scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0', className)}>{children}</h2>;
}
export function TypographyH3({ className, children }: ComponentProps<'h3'>) {
    return <h3 className={cn('scroll-m-20 text-2xl font-semibold tracking-tight', className)}>{children}</h3>;
}
export function TypographyH4({ className, children }: ComponentProps<'h4'>) {
    return <h4 className={cn('scroll-m-20 text-xl font-semibold tracking-tight', className)}>{children}</h4>;
}

export function TypographyP({ className, children }: ComponentProps<'p'>) {
    return <p className={cn('leading-7 [&:not(:first-child)]:mt-6', className)}>{children}</p>;
}
export function TypographyBlockquote({ className, children }: ComponentProps<'blockquote'>) {
    return <blockquote className={cn('mt-6 border-l-2 pl-6 italic', className)}>{children}</blockquote>;
}
export function TypographyLarge({ className, children }: ComponentProps<'div'>) {
    return <div className={cn('text-lg font-semibold', className)}>{children}</div>;
}

export function TypographySmall({ className, children }: ComponentProps<'small'>) {
    return <small className={cn('text-sm leading-none font-medium', className)}>{children}</small>;
}
