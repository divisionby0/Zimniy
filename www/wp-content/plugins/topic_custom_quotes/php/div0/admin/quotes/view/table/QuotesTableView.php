<?php


class QuotesTableView extends WP_List_Table
{
    private $notesCollection;

    public function __construct($args, $notesCollection)
    {
        $this->notesCollection = $notesCollection;
        parent::__construct($args);
        $this->prepare_items();
        $this->display();
    }

    public function get_columns(){
        $columns = array(
            'quoteNote'       => 'Заметка к цитате',
            'quote'       => 'Цитата',
            'postTitle' => 'Статья',
            'year'        => 'Year',
            'director'    => 'Director',
            'rating'      => 'Rating'
        );

        return $columns;
    }
    
    public function get_hidden_columns(){
        return array();
    }
    public function get_sortable_columns(){
        return array('quoteNote' => array('quoteNote', false), 'quote' => array('quote', false));
    }

    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $data = $this->table_data();
        usort( $data, array( &$this, 'sort_data' ) );

        $perPage = 5;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);

        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );

        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data()
    {
        $data = array();

        //echo 'total quotes: '.$this->quotesCollection->size();

        $collectionIterator = $this->notesCollection->getIterator();
        while($collectionIterator->hasNext()){
            $quote = $collectionIterator->next();
            $id = $quote->getId();
            $note = 'quote note';
            $quoteText = $quote->getText();
            $postTitle = $quote->getParentPostTitle();

            $data[] = array(
                'quoteNote'=>$note,
                'quote'=>$quoteText,
                'postTitle'=>$postTitle,
                'year'=> '1994',
                'director'=>'Frank Darabont',
                'rating'=>'9.3'
            );
        }
        return $data;
    }

    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'quote':
            case 'quoteNote':
            case 'postTitle':
            case 'year':
            case 'director':
            case 'rating':
                return $item[ $column_name ];

            default:
                return print_r( $item, true ) ;
        }
    }

    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = 'quote';
        $order = 'asc';

        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }

        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }


        $result = strnatcmp( $a[$orderby], $b[$orderby] );

        if($order === 'asc')
        {
            return $result;
        }

        return -$result;
    }
}