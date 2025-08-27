import { Pagination, PaginationContent, PaginationItem, PaginationLink, PaginationNext, PaginationPrevious } from '@/components/ui/pagination';
import { Filter } from '@/types';
import { Meta } from '@/types/paginator-type';

import { router } from '@inertiajs/react';
import { ChevronLeft, ChevronRight } from 'lucide-react';

export default function DefaultPaginator({ meta, filter }: { meta: Meta; filter?: Filter }) {
    const handlePagination = (url: string | null) => {
        if (url) {
            router.get(url, { ...filter }, { preserveScroll: true });
        }
    };

    return (
        <Pagination className="mt-6 select-none">
            <PaginationContent className="flex-wrap justify-center gap-1.5">
                {meta.links.map((link, index) => {
                    const isPrevious = link.label === '&laquo; Previous';
                    const isNext = link.label === 'Next &raquo;';
                    const isDisabled = link.url === null;

                    if (isPrevious) {
                        return (
                            <PaginationItem key={index}>
                                <PaginationPrevious
                                    isActive={!isDisabled}
                                    className={`flex items-center gap-1 transition-all ${isDisabled ? 'cursor-not-allowed' : 'hover:bg-primary/10'}`}
                                    onClick={() => handlePagination(link.url)}
                                >
                                    <ChevronLeft className="h-4 w-4" />
                                    Prev
                                </PaginationPrevious>
                            </PaginationItem>
                        );
                    }

                    if (isNext) {
                        return (
                            <PaginationItem key={index}>
                                <PaginationNext
                                    isActive={!isDisabled}
                                    className={`flex items-center gap-1 transition-all ${isDisabled ? 'cursor-not-allowed' : 'hover:bg-primary/10'}`}
                                    onClick={() => handlePagination(link.url)}
                                >
                                    Next
                                    <ChevronRight className="h-4 w-4" />
                                </PaginationNext>
                            </PaginationItem>
                        );
                    }

                    return (
                        <PaginationItem key={index}>
                            <PaginationLink
                                isActive={link.active}
                                onClick={() => handlePagination(link.url)}
                                className={`rounded-md px-3 py-1.5 text-sm transition-all ${
                                    link.active ? 'bg-primary font-bold text-white hover:bg-primary/80' : 'hover:bg-muted hover:text-primary'
                                }`}
                            >
                                {link.label}
                            </PaginationLink>
                        </PaginationItem>
                    );
                })}
            </PaginationContent>
        </Pagination>
    );
}
