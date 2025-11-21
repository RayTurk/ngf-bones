<?php
class bc_checkbox_walker extends Walker {
    public $tree_type = 'category';
    public $db_fields = array(
        'parent' => 'parent',
        'id'     => 'term_id',
    ); //TODO: decouple this
 
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker:start_lvl()
     *
     * @since 2.5.1
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent  = str_repeat( "\t", $depth );
        $output .= "$indent<ul class='children level_".$depth."'>\n";
    }
 
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 2.5.1
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent  = str_repeat( "\t", $depth );
        $output .= "$indent</ul>\n";
    }
 
    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 2.5.1
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $category The current term object.
     * @param int    $depth    Depth of the term in reference to parents. Default 0.
     * @param array  $args     An array of arguments. @see wp_terms_checklist()
     * @param int    $id       ID of the current term.
     */
    public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
        
        
        if ( empty( $args['taxonomy'] ) ) {
            $taxonomy = 'category';
        } else {
            $taxonomy = $args['taxonomy'];
        }
        $haschildren = '';
        if (!empty(get_term_children( $category->term_id, $taxonomy ))){
            $haschildren = '<span class="expander"></span>';
        }
        if ( $taxonomy == 'category' ) {
            $name = 'post_category';
        } else {
            $name = 'tax_input[' . $taxonomy . ']';
        }
 
        $args['popular_cats'] = empty( $args['popular_cats'] ) ? array() : $args['popular_cats'];
        $class                = in_array( $category->term_id, $args['popular_cats'] ) ? ' class="popular-category"' : '';
 
        $args['selected_cats'] = empty( $args['selected_cats'] ) ? array() : $args['selected_cats'];
 
        if ( ! empty( $args['list_only'] ) ) {
            $aria_checked = 'false';
            $inner_class  = 'category';
 
            if ( in_array( $category->term_id, $args['selected_cats'] ) ) {
                $inner_class .= ' selected';
                $aria_checked = 'true';
            }
 
            /** This filter is documented in wp-includes/category-template.php */
            $output .= "\n" . '<li' . $class . '>' .
                '<span class="' . $inner_class . '" data-term-id=' . $category->term_id .
                ' tabindex="0" role="checkbox" aria-checked="' . $aria_checked . '">' .
                esc_html( apply_filters( 'the_category', $category->name, '', '' ) ). ' </span>'.' '.$haschildren;
        } else {
            /** This filter is documented in wp-includes/category-template.php */
            $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" .
                '<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" name="' . $name . '[]" id="in-' . $taxonomy . '-' . $category->term_id . '"' .
                checked( in_array( $category->term_id, $args['selected_cats'] ), true, false ) .
                disabled( empty( $args['disabled'] ), false, false ) . ' /> ' .
                esc_html( apply_filters( 'the_category', $category->name, '', '' ) ). ' </label>'.'  '.$haschildren;
        }
    }
 
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 2.5.1
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $category The current term object.
     * @param int    $depth    Depth of the term in reference to parents. Default 0.
     * @param array  $args     An array of arguments. @see wp_terms_checklist()
     */
    public function end_el( &$output, $category, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}



// remove the old box
function remove_default_categories_box() {
    remove_meta_box('categorydiv', 'post', 'side');
}
add_action( 'admin_head', 'remove_default_categories_box' );

// add the new box
function add_custom_categories_box() {
    add_meta_box('customcategorydiv', 'Categories', 'custom_post_categories_meta_box', 'post', 'side', 'low', array( 'taxonomy' => 'category' ));
}
add_action('admin_menu', 'add_custom_categories_box');

/**
 * Display CUSTOM post categories form fields.
 *
 * @since 2.6.0
 *
 * @param object $post
 */
function custom_post_categories_meta_box( $post, $box ) {
    $defaults = array('taxonomy' => 'category');
    if ( !isset($box['args']) || !is_array($box['args']) )
        $args = array();
    else
        $args = $box['args'];
    extract( wp_parse_args($args, $defaults), EXTR_SKIP );
    $tax = get_taxonomy($taxonomy);

    ?>
    <div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv better-categories">
        <h2>Hello World</h2>
        <ul id="<?php echo $taxonomy; ?>-tabs" class="category-tabs">
            <li class="tabs"><a href="#<?php echo $taxonomy; ?>-all" tabindex="3"><?php echo $tax->labels->all_items; ?></a></li>
            <li class="hide-if-no-js"><a href="#<?php echo $taxonomy; ?>-pop" tabindex="3"><?php _e( 'Most Used' ); ?></a></li>
        </ul>

        <div id="<?php echo $taxonomy; ?>-pop" class="tabs-panel" style="display: none;">
            <ul id="<?php echo $taxonomy; ?>checklist-pop" class="categorychecklist form-no-clear" >
                <?php $popular_ids = wp_popular_terms_checklist($taxonomy); ?>
            </ul>
        </div>

        <div id="<?php echo $taxonomy; ?>-all" class="tabs-panel">
            <?php
            $name = ( $taxonomy == 'category' ) ? 'post_category' : 'tax_input[' . $taxonomy . ']';
            echo "<input type='hidden' name='{$name}[]' value='0' />"; // Allows for an empty term set to be sent. 0 is an invalid Term ID and will be ignored by empty() checks.
            ?>
            <ul id="<?php echo $taxonomy; ?>checklist" class="list:<?php echo $taxonomy?> categorychecklist form-no-clear">
                <?php 
                /**
                 * This is the one line we had to change in the original function
                 * Notice that "checked_ontop" is now set to FALSE
                 */
                    wp_terms_checklist($post->ID, array( 
                        'taxonomy' => $taxonomy, 
                        'popular_cats' => $popular_ids, 
                        'checked_ontop' => FALSE,
                        'walker'        => new bc_checkbox_walker
                    )) 
                ?>
            </ul>
        </div>
    <?php if ( !current_user_can($tax->cap->assign_terms) ) : ?>
    <p><em><?php _e('You cannot modify this taxonomy.'); ?></em></p>
    <?php endif; ?>
    <?php if ( current_user_can($tax->cap->edit_terms) ) : ?>
            <div id="<?php echo $taxonomy; ?>-adder" class="wp-hidden-children">
                <h4>
                    <a id="<?php echo $taxonomy; ?>-add-toggle" href="#<?php echo $taxonomy; ?>-add" class="hide-if-no-js" tabindex="3">
                        <?php
                            /* translators: %s: add new taxonomy label */
                            printf( __( '+ %s' ), $tax->labels->add_new_item );
                        ?>
                    </a>
                </h4>
                <p id="<?php echo $taxonomy; ?>-add" class="category-add wp-hidden-child">
                    <label class="screen-reader-text" for="new<?php echo $taxonomy; ?>"><?php echo $tax->labels->add_new_item; ?></label>
                    <input type="text" name="new<?php echo $taxonomy; ?>" id="new<?php echo $taxonomy; ?>" class="form-required form-input-tip" value="<?php echo esc_attr( $tax->labels->new_item_name ); ?>" tabindex="3" aria-required="true"/>
                    <label class="screen-reader-text" for="new<?php echo $taxonomy; ?>_parent">
                        <?php echo $tax->labels->parent_item_colon; ?>
                    </label>
                    <?php wp_dropdown_categories( array( 'taxonomy' => $taxonomy, 'hide_empty' => 0, 'name' => 'new'.$taxonomy.'_parent', 'orderby' => 'name', 'hierarchical' => 1, 'show_option_none' => '&mdash; ' . $tax->labels->parent_item . ' &mdash;', 'tab_index' => 3 ) ); ?>
                    <input type="button" id="<?php echo $taxonomy; ?>-add-submit" class="add:<?php echo $taxonomy ?>checklist:<?php echo $taxonomy ?>-add button category-add-sumbit" value="<?php echo esc_attr( $tax->labels->add_new_item ); ?>" tabindex="3" />
                    <?php wp_nonce_field( 'add-'.$taxonomy, '_ajax_nonce-add-'.$taxonomy, false ); ?>
                    <span id="<?php echo $taxonomy; ?>-ajax-response"></span>
                </p>
            </div>
        <?php endif; ?>
    </div>
    <?php
}