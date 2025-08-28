import { PlusIcon } from 'lucide-react';
import { ComponentProps } from 'react';
import { Button } from '../ui/button';

export default function AddButton({ children, ...props }: ComponentProps<typeof Button>) {
    return (
        <Button variant={'default'} {...props}>
            <PlusIcon />
            {children}
        </Button>
    );
}
