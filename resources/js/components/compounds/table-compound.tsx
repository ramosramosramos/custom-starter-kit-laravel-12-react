import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import { ComponentProps } from 'react';

export default function TableCompound({ className, children, ...props }: ComponentProps<typeof Table>) {
    return (
        <Table className={className} {...props}>
            {children}
        </Table>
    );
}
TableCompound.Body = TableBody;
TableCompound.Caption = TableCaption;
TableCompound.Cell = TableCell;
TableCompound.Head = TableHead;
TableCompound.Header = TableHeader;
TableCompound.Row = TableRow;

{
    /* <TableCompound>
  <TableCompound.Caption>A list of your recent invoices.</TableCompound.Caption>
  <TableCompound.Header>
    <TableCompound.Row>
      <TableCompound.Head className="w-[100px]">Invoice</TableCompound.Head>
      <TableCompound.Head>Status</TableCompound.Head>
      <TableCompound.Head>Method</TableCompound.Head>
      <TableCompound.Head className="text-right">Amount</TableCompound.Head>
    </TableCompound.Row>
  </TableCompound.Header>
  <TableCompound.Body>
    <TableCompound.Row>
      <TableCompound.Cell className="font-medium">INV001</TableCompound.Cell>
      <TableCompound.Cell>Paid</TableCompound.Cell>
      <TableCompound.Cell>Credit Card</TableCompound.Cell>
      <TableCompound.Cell className="text-right">$250.00</TableCompound.Cell>
    </TableCompound.Row>
  </TableCompound.Body>
</TableCompound> */
}
