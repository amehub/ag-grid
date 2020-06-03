import { OriginalColumnGroup, ManagedFocusComponent } from "@ag-grid-community/core";
import { BaseColumnItem } from "./primaryColsPanel";
import { ColumnFilterResults } from "./primaryColsListPanel";
export declare class ToolPanelColumnGroupComp extends ManagedFocusComponent implements BaseColumnItem {
    private static TEMPLATE;
    private columnController;
    private dragAndDropService;
    private gridOptionsWrapper;
    private cbSelect;
    private eLabel;
    private eGroupOpenedIcon;
    private eGroupClosedIcon;
    private eColumnGroupIcons;
    private eDragHandle;
    private readonly columnGroup;
    private readonly columnDept;
    private readonly expandedCallback;
    private readonly allowDragging;
    private expanded;
    private displayName;
    private processingColumnStateChange;
    private getFilterResultsCallback;
    constructor(columnGroup: OriginalColumnGroup, columnDept: number, allowDragging: boolean, expandByDefault: boolean, expandedCallback: () => void, getFilterResults: () => ColumnFilterResults);
    init(): void;
    protected handleKeyDown(e: KeyboardEvent): void;
    private addVisibilityListenersToAllChildren;
    private setupDragging;
    private createDragItem;
    private setupExpandContract;
    private onLabelClicked;
    private onCheckboxChanged;
    private onChangeCommon;
    private actionUnCheckedReduce;
    private actionCheckedReduce;
    onColumnStateChanged(): void;
    private workOutSelectedValue;
    private workOutReadOnlyValue;
    private isColumnVisible;
    private onExpandOrContractClicked;
    private toggleExpandOrContract;
    private setOpenClosedIcons;
    isExpanded(): boolean;
    getDisplayName(): string | null;
    onSelectAllChanged(value: boolean): void;
    isSelected(): boolean;
    isSelectable(): boolean;
    isExpandable(): boolean;
    setExpanded(value: boolean): void;
    setSelected(selected: boolean): void;
}
