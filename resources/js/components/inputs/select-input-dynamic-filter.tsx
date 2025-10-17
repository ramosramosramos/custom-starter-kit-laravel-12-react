import { useState, useMemo, useRef } from "react";
import { Input } from "@/components/ui/input";
import { ScrollArea } from "@/components/ui/scroll-area";
import { useForm } from "@inertiajs/react";
import { Filter } from "@/types";

type SelectInputDynamicFilter = {
    searchKey: keyof Filter;
    url: string;
    values: { id: string; name: string }[];
    placeholder: string;
    filter: Filter;
};

export function SelectInputDynamicFilter({
    searchKey,
    url,
    values,
    placeholder,
    filter,
}: SelectInputDynamicFilter) {
    const { data, get } = useForm({ ...filter });
    const [query, setQuery] = useState("");
    const [showDropdown, setShowDropdown] = useState(false);
    const containerRef = useRef<HTMLDivElement>(null);

    const filteredValues = useMemo(() => {
        if (!query) return [];
        return values.filter((v) =>
            v.name.toLowerCase().includes(query.toLowerCase())
        );
    }, [values, query]);

    const submit = (value: string) => {
        data[searchKey] = value;
        get(url);
        setQuery(value);
        setShowDropdown(false);

    };

    return (
        <div ref={containerRef} className="relative w-[220px]">
            <Input
                placeholder={`Search ${placeholder}`}
                defaultValue={filter[searchKey]}
                onChange={(e) => {
                    if (e.target.value == "") {
                        submit('');
                    }
                    setQuery(e.target.value);
                    setShowDropdown(!!e.target.value);
                }}
                onFocus={() => setShowDropdown(!!query)}
                onBlur={() => setTimeout(() => setShowDropdown(false), 150)} // allow click before closing
            />

            {showDropdown && filteredValues.length > 0 && (
                <div className="absolute z-50 mt-1 w-full bg-popover border border-border rounded-md shadow-lg">
                    <ScrollArea className="h-60">
                        {filteredValues.map((v) => (
                            <div
                                key={v.id}
                                onClick={() => submit(v.name)}
                                className="cursor-pointer px-3 py-2 hover:bg-accent hover:text-accent-foreground"
                            >
                                {v.name}
                            </div>
                        ))}
                    </ScrollArea>
                </div>
            )}
            {showDropdown && filteredValues.length == 0 && (
                <div className="absolute z-50 mt-1 w-full bg-popover border border-border rounded-md shadow-lg">
                    <ScrollArea className="h-50">

                        <div
                            className="cursor-pointer px-3 py-2 hover:bg-accent hover:text-accent-foreground"
                        >
                            <span className="text-red-500">
                                "{query}"
                            </span> doesn't exist in the selection.
                        </div>

                    </ScrollArea>
                </div>
            )}


        </div>
    );
}
// usage
//   <SelectInputDynamicFilter url={EmployeeController.index().url} searchKey="position_name" filter={filter} placeholder='Position' values={positions} />
