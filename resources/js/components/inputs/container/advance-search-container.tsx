
import { Button } from "@/components/ui/button";
import { getLocalStorageItem, setLocalStorageItem } from "@/lib/helpers/local-storage";
import { cn } from "@/lib/utils";
import { Check, SearchCheck, X } from "lucide-react";
import { ComponentProps, useEffect, useRef, useState } from "react";

export function AdvanceSearchContainer({ localStorageKey, onClose, contentClassName = '', className, children, ...props }: ComponentProps<"div"> & {
    localStorageKey: string
    contentClassName?: string
    onClose?: () => void
}) {
    const [open, setOpen] = useState(getLocalStorageItem(`${localStorageKey}_advance_search`) ?? false);


    return (
        <div className={cn('flex flex-col items-start justify-center', className)} {...props}>
            <Button
                variant="outline"
                onClick={() => {
                    setOpen((prev) => !prev);
                    setLocalStorageItem(`${localStorageKey}_advance_search`, !open);
                    if (open) {
                        onClose?.();
                    }

                }}
            >
                {open ? <span className="flex items-center gap-1.5 text-red-500">
                    <X />
                    Close Advance Search
                </span> : <span className="flex items-center gap-1.5 text-green-500">
                    <SearchCheck />
                    Advance Search
                </span>}
            </Button>

            {open && (
                <div className={cn(`flex flex-wrap justify-start p-1 gap-1.5 `, contentClassName)}>
                    {children}
                </div>
            )}
        </div>
    );
}

//usage

{/* <AdvanceSearchContainer
    localStorageKey='employees'
    onClose={() => router.get(EmployeeController.index(), { search: filter.search }, { preserveScroll: true })}
    className='flex flex-wrap justify-start p-1 gap-1.5'>
    <SelectInputDynamicFilter url={EmployeeController.index().url} searchKey="position_name" filter={filter} placeholder='Position' values={positions} />
    <SelectStaticFilter url={EmployeeController.index().url} searchKey="status" filter={filter} placeholder='Status' values={statuses} />
</AdvanceSearchContainer> */}
