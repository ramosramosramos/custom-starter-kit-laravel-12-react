import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { ComponentProps } from 'react';

export default function SelectCompound({ children, ...props }: ComponentProps<typeof Select>) {
    return <Select {...props}>{children}</Select>;
}
SelectCompound.Content = SelectContent;
SelectCompound.Item = SelectItem;
SelectCompound.Trigger = SelectTrigger;
SelectCompound.Value = SelectValue;

//usage

// <SelectCompound>
//     <SelectCompound.Trigger className="w-[180px]">
//         <SelectCompound.Value placeholder="Theme" />
//     </SelectCompound.Trigger>
//     <SelectCompound.Content>
//         <SelectCompound.Item value="light">Light</SelectCompound.Item>
//         <SelectCompound.Item value="dark">Dark</SelectCompound.Item>
//         <SelectCompound.Item value="system">System</SelectCompound.Item>
//     </SelectCompound.Content>
// </SelectCompound>
