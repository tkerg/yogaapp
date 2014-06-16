    @foreach ($modals as $modal)
      <div id="<?=$modal['name']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog<?=isset($modal['size'])?' modal-'.$modal['size']:''?>">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><?=$modal['title']?></h4>
            </div>
            <div class="modal-body clearfix">
              <div id="modalInt"><?=$modal['content']?></div>
            </div>
            <div class="modal-footer">
              <div class="btn-group">
                <?php
                  if(isset($modal['buttons'])) {
                    foreach ($modal['buttons'] as $button => $attr) {
                      echo '<a class="btn';
                      echo isset($attr['special']) ? ' btn-'.$attr['special'] : ' btn-default';
                      echo '" href="'.$attr['href'].'"data-dismiss="modal" data-target="#'.$modal['name'].'">'.$attr['content'].'</a>';
                    }
                  }
                ?>
              </div>
            </div>
          </div><!-- /.modal-content -->
        </div>
      </div>
    @endforeach