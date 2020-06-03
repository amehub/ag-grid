// Type definitions for @ag-grid-community/core v23.2.0
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ag-grid/>
import { BeanStub } from "../context/beanStub";
import { RowNode } from "./rowNode";
export interface RowPosition {
    rowIndex: number;
    rowPinned: string | undefined;
}
export declare class RowPositionUtils extends BeanStub {
    private rowModel;
    private rowRenderer;
    private pinnedRowModel;
    getFirstRow(): RowPosition;
    getRowNode(gridRow: RowPosition): RowNode | null;
    sameRow(rowA: RowPosition | undefined, rowB: RowPosition | undefined): boolean;
    before(rowA: RowPosition, rowB: RowPosition): boolean;
}
