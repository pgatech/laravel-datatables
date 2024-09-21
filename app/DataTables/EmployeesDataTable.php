<?php

namespace App\DataTables;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EmployeesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        // Add row number here
        return (new EloquentDataTable($query))
            ->addColumn('no', function () {
                static $no = 0;
                return ++$no;
            })
            ->addColumn('action', 'employees.action')  // Adjust this to the correct action view
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Employee $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('employees-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('no')  // Add No column
                ->exportable(false)
                ->printable(true)
                ->width(60)
                ->addClass('text-center')
                ->title('No'),
            Column::make('first_name'),
            Column::make('last_name'),
            Column::make('email'),
            Column::make('phone_number'),
            Column::make('date_of_birth'),
            Column::make('gender'),
            Column::make('marital_status'),
            Column::make('address'),
            Column::make('city'),
            Column::make('postal_code'),
            Column::make('country'),
            Column::make('job_title'),
            Column::make('department'),
            Column::make('employment_type'),
            Column::make('hire_date'),
            Column::make('salary'),
            Column::make('bonus'),
            Column::make('work_email'),
            Column::make('work_phone'),
            Column::make('office_location'),
            Column::make('shift_start_time'),
            Column::make('shift_end_time'),
            Column::make('vacation_days'),
            Column::make('sick_days'),
            Column::make('emergency_contact_name'),
            Column::make('emergency_contact_phone'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')  // Action column
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Employees_' . date('YmdHis');
    }
}
