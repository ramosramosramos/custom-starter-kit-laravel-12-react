import { Collapsible, CollapsibleContent, CollapsibleTrigger } from '@/components/ui/collapsible';
import {
    SidebarGroup,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { ChevronDown } from 'lucide-react';
import { useEffect, useState } from 'react';

export function NavMain({ items = [] }: { items: NavItem[] }) {
    return (
        <SidebarGroup className="px-2 py-0">
            <SidebarGroupLabel>Platform</SidebarGroupLabel>
            <SidebarMenu>
                {items.map(
                    (item) =>
                        item.show && (
                            <SidebarMenuItem key={item.title}>
                                <NavItemRecursive item={item} />
                            </SidebarMenuItem>
                        )
                )}
            </SidebarMenu>
        </SidebarGroup>
    );
}

/**
 * Recursive NavItem component.
 * If item has children, it becomes collapsible.
 * Otherwise, it's just a link.
 */
function NavItemRecursive({ item }: { item: NavItem }) {
    const [open, setOpen] = useState(false);

    // Auto-open if any child is active
    useEffect(() => {
        if (item.children?.some((child) => child.isActive)) {
            setOpen(true);
        }
    }, [item.children]);

    // Case 1: Has children → collapsible
    if (item.children?.length) {
        return (
            <Collapsible open={open} onOpenChange={setOpen}>
                <CollapsibleTrigger asChild>
                    <SidebarMenuButton isActive={item.isActive} tooltip={{ children: item.title }}>
                        <div className="flex w-full items-center">
                            {item.icon && <item.icon className="h-4 w-4" />}
                            <span className="ml-2">{item.title}</span>
                            <ChevronDown
                                className={`ml-auto h-4 w-4 transition-transform duration-200 ${
                                    open ? 'rotate-180' : ''
                                }`}
                            />
                        </div>
                    </SidebarMenuButton>
                </CollapsibleTrigger>

                <CollapsibleContent className="space-y-1 pt-1 pl-4">
                    <SidebarMenu>
                        {item.children.map(
                            (child) =>
                                child.show && (
                                    <SidebarMenuItem key={child.title}>
                                        <NavItemRecursive item={child} />
                                    </SidebarMenuItem>
                                )
                        )}
                    </SidebarMenu>
                </CollapsibleContent>
            </Collapsible>
        );
    }

    // Case 2: No children → normal link
    return (
        <SidebarMenuButton asChild isActive={item.isActive} tooltip={{ children: item.title }}>
            {item.tag === 'a' ? (
                <a href={item.href}>
                    {item.icon && <item.icon />}
                    <span>{item.title}</span>
                </a>
            ) : (
                <Link href={item.href} prefetch="click" cacheFor="60m">
                    {item.icon && <item.icon />}
                    <span>{item.title}</span>
                </Link>
            )}
        </SidebarMenuButton>
    );
}
