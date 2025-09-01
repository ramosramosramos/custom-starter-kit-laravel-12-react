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

//for  with search
//for  with search

// const [particularSearch, setParticularSearch] = useState("");
// const filteredParticulars = particulars.filter((p) =>
//     p.name.toLowerCase().includes(particularSearch.toLowerCase())
// );

//    <SelectCompound
//value={String(data?.particular_id)}
//  onValueChange={(value) => setData("particular_id", Number(value))}
//                             >
//  <SelectCompound.Trigger className="w-full">
//      <SelectCompound.Value placeholder="Particular" />
//  </SelectCompound.Trigger>
//  <SelectCompound.Content>
//      {/* 🔎 Search input inside dropdown */}
//      <div className="sticky top-0 z-10 bg-white p-2">
//          <input
//              type="text"
//              placeholder="Search..."
//              className="w-full rounded border px-2 py-1 text-sm"
//              value={particularSearch}
//              onChange={(e) => setParticularSearch(e.target.value)}
//              onKeyDown={(e) => e.stopPropagation()} // prevent select keyboard conflict
//          />
//      </div>

//      {filteredParticulars.length > 0 ? (
//          filteredParticulars.map((particular) => (
//              <SelectCompound.Item
//                  className="capitalize"
//                  key={particular.id}
//                  value={String(particular.id)}
//              >
//                  {particular.name}
//              </SelectCompound.Item>
//          ))
//      ) : (
//          <div className="p-2 text-sm text-gray-500">
//              No match found
//          </div>
//      )}
//  </SelectCompound.Content>
//                             </SelectCompound>
