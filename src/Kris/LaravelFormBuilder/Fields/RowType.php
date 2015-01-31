<?php namespace  Kris\LaravelFormBuilder\Fields;

use Kris\LaravelFormBuilder\Form;

class RowType extends FormField
{
    /*
     * Total number of fields for the row
     *
     * @var number
     */
    protected $numberOfFields;

    /*
     * Boolean to determine if this is the first row in the form
     *
     * @var boolean
     */
    protected $isFirstRow;

    public function __construct($numberOfFields = 0, $isFirstRow = false, Form $parent)
    {
        $this->numberOfFields = $numberOfFields;        
        $this->isFirstRow = $isFirstRow;

        parent::__construct('row', 'row', $parent);
    }

    protected function getTemplate()
    {
        return 'row';
    }

    protected function getDefaults()
    {
        return [
            'number_of_fields' => $this->numberOfFields,
            'is_first_row' => $this->isFirstRow
        ];
    }

}
