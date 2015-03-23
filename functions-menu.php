function nav_menu_add_years( $items, $args ) {
    if ( 'annees' == $args->theme_location ) {
        $today = getdate();
        $year =$today['year'];
        $items .= "<li><a>" . $year . "</a></li>";
        do {
                $items .=  "<li><a>" . $year . "</a></li>";
                $year = $year-1;
                $args = array(
                        "date_query" => array(
                            "year" => $year
                        ),
                    );
                $the_query = new WP_Query( $args );
        } while (  $the_query->have_posts() );
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_add_years', 10, 2 );
