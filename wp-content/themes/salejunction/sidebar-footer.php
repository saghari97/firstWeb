<div class="grid_6 footer_widget alpha">
    <?php
    if (is_active_sidebar('first-footer-widget-area')) :
        dynamic_sidebar('first-footer-widget-area');
    endif;
    ?> 	
</div>
<div class="grid_6 footer_widget">
    <div class="buyers widget">
        <?php
        if (is_active_sidebar('second-footer-widget-area')) :
            dynamic_sidebar('second-footer-widget-area');
        endif;
        ?> 
    </div>
</div>
<div class="grid_6 footer_widget">
    <div class="joinus widget">
        <?php
        if (is_active_sidebar('third-footer-widget-area')) :
            dynamic_sidebar('third-footer-widget-area');
        endif;
        ?> 
    </div>
</div>
<div class="grid_6 omega footer_widget">
    <div class="footer_paypal widget"> 
        <?php
        if (is_active_sidebar('fourth-footer-widget-area')) :
            dynamic_sidebar('fourth-footer-widget-area');
        endif;
        ?> 
    </div>
</div>