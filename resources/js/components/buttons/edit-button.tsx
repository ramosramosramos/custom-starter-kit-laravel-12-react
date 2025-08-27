import { Edit } from 'lucide-react';
import { ComponentProps } from 'react';
import { Button } from '../ui/button';

export default function EditButton({ children, ...props }: ComponentProps<typeof Button>) {
    return (
        <Button variant={'outline'} {...props}>
            <Edit />
            {children}
        </Button>
    );
}
