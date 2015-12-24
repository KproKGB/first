{if isset($confirmation)}
    <div class="alert alert-success">Значения обновлены</div>
{/if}
<fieldset>
    <h2>My Module configuration</h2>
    <div class="panel">
        <div class="panel-heading">
            <legend><img src="../img/admin/cog.gif" alt="" width="16" />Configuration</legend>
        </div>
        <form action="" method="post">
            <div class="form-group clearfix">
                <label class="col-lg-3">Display buttom:</label>
                <div class="col-lg-9">
                    <img src="../img/admin/enabled.gif" alt="" />
                    <input type="radio" id="enable_buttom_1" name="enable_buttom" value="1" {if $enable_buttom eq '1'}checked{/if} />
                    <label class="t" for="enable_buttom_1">Yes</label>
                    <img src="../img/admin/disabled.gif" alt="" />
                    <input type="radio" id="enable_buttom_0" name="enable_buttom" value="0" {if empty($enable_buttom) || $enable_buttom eq '0'}checked{/if} />
                    <label class="t" for="enable_buttom_0">No</label>
                </div>
            </div>
            <div class="panel-footer">
                <input class="btn btn-default pull-right" type="submit" name="mymod_pc_form" value="Save" />
            </div>
        </form>
    </div>
</fieldset>