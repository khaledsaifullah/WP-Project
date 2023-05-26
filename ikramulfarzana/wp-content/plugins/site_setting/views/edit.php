<style type="text/css">
    .setting-table .text-field{
        width:50% !important;
    }
</style>
<div class="wrap">
  <h2 id="add-new-user"><?php echo $page_title; ?></h2>
    
  <form id="news-edit-form" name="news-edit-form" method="post" action="<?php echo $this->base_url; ?>" enctype="multipart/form-data">  
    
    <table class="form-table setting-table">
      <tbody>
        <tr class="form-field form-required">
             <th scope="row"><label>Mobile Number</label></th>
            <td><input type="text" name="form_data[first_mobile_number][first_mobile_number]" value="<?php echo get_option('first_mobile_number') ?>" class="text-field"/></td>
             </td>
        </tr>

         <tr class="form-field form-required">
             <th scope="row"><label>facebook_number</label></th>
            <td><input type="text" name="form_data[facebook_number][facebook_number]" value="<?php echo get_option('facebook_number') ?>" class="text-field"/></td>
             </td>
        </tr>



        <tr class="form-field form-required">
            <th scope="row"><label>Copyright Text</label></th>
            <td><textarea name="form_data[copyright_text][copyright_text]" rows="5" cols="10" style="width:50% !important;"><?php echo get_option('copyright_text') ?></textarea></td>
        </tr>

        <tr class="form-field form-required">
            <th scope="row"><label>Slogan Text Header</label></th>
            <td><textarea name="form_data[slogan_text][slogan_text]" rows="5" cols="10" style="width:50% !important;"><?php echo get_option('slogan_text') ?></textarea></td>
        </tr>


        <tr class="form-field form-required">
            <th scope="row"><label>Our Recent Camp Text</label></th>
            <td><textarea name="form_data[our_recent_camp][our_recent_camp]" rows="5" cols="10" style="width:50% !important;"><?php echo get_option('our_recent_camp') ?></textarea></td>
        </tr>




      </tbody>
    </table>
    
    <p class="submit">
      <input type="submit" value="<?php echo $submit_btn_text; ?>" class="button-primary" id="btn-submit" name="form_data[btn-submit]">
      <input type="hidden" value="save" name="form_data[action]">      
    </p>
    
  </form>
</div>