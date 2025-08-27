import { Trash } from 'lucide-react';
import { ComponentProps } from 'react';
import { Button } from '../ui/button';

export default function DeleteButton({ children, ...props }: ComponentProps<typeof Button>) {
    return (
        <Button variant={'destructive'} {...props}>
            <Trash />
            {children}
        </Button>
    );
}
