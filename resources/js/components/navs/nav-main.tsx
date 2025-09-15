import { Collapsible, CollapsibleContent, CollapsibleTrigger } from '@/components/ui/collapsible';
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { ChevronDown } from 'lucide-react';

export function NavMain({ items = [] }: { items: NavItem[] }) {
    return (
        <SidebarGroup className="px-2 py-0">
            <SidebarGroupLabel>Platform</SidebarGroupLabel>
            <SidebarMenu>
                {items.map(
                    (item) =>
                        item.show && (
                            <SidebarMenuItem key={item.title}>
                                {item.type === 'parent' ? (
                                    <Collapsible>
                                        {/* Parent as dropdown trigger */}
                                        <CollapsibleTrigger asChild>
                                            <SidebarMenuButton isActive={item.isActive} tooltip={{ children: item.title }}>
                                                <div className="flex w-full items-center">
                                                    {item.icon && <item.icon className="h-4 w-4" />}
                                                    <span className="ml-2">{item.title}</span>
                                                    <ChevronDown className="ml-auto h-4 w-4 transition-transform duration-200 group-data-[state=open]:rotate-180" />
                                                </div>
                                            </SidebarMenuButton>
                                        </CollapsibleTrigger>

                                        {/* Children links */}
                                        <CollapsibleContent className="space-y-1 pl-4">
                                            {item.children?.map(
                                                (child) =>
                                                    child.show && (
                                                        <SidebarMenuItem key={child.title}>
                                                            <SidebarMenuButton asChild isActive={child.isActive} tooltip={{ children: child.title }}>
                                                                <Link href={child.href} prefetch="click" cacheFor="60m">
                                                                    {child.icon && <child.icon />}
                                                                    <span>{child.title}</span>
                                                                </Link>
                                                            </SidebarMenuButton>
                                                        </SidebarMenuItem>
                                                    ),
                                            )}
                                        </CollapsibleContent>
                                    </Collapsible>
                                ) : (
                                    // Normal item (single link)
                                    <SidebarMenuButton asChild isActive={item.isActive} tooltip={{ children: item.title }}>
                                        <Link href={item.href} prefetch="click" cacheFor="60m">
                                            {item.icon && <item.icon />}
                                            <span>{item.title}</span>
                                        </Link>
                                    </SidebarMenuButton>
                                )}
                            </SidebarMenuItem>
                        ),
                )}
            </SidebarMenu>
        </SidebarGroup>
    );
}
