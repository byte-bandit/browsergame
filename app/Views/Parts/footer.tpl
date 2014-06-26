            </div> <!-- panel-body -->
          </div> <!-- panel -->
        </div> <!-- col-md-6 -->
        <!-- Sidebar -->
        {if $logged}
          <div class="col-md-3">
            {include file="Parts/hero.tpl"}
          </div>
        {/if}
      </div> <!-- row -->
      <!-- footer -->
      <div class="panel panel-default">
        <div class="panel-body"> 
          Roguelike Browsergame Clone Engine Version 0.1.0 {"Y"|date}
        </div> <!-- panel-body -->
      </div> <!-- footer panel -->
    </div> <!-- content -->
  </body>
</html>