<table cellpadding="2" cellspacing="1" width="98%">
	<tr> 
      <td width="120">允许上传的图片类型</td>
      <td><input type="text" name="setting[upload_allowext]" value="gif|jpg|jpeg|png|bmp" size="40" class="input-text"></td>
    </tr>
	<tr> 
      <td>是否从已上传中选择</td>
      <td><div class="mt-radio-inline">
          <label class="mt-radio mt-radio-outline"><input type="radio" name="setting[isselectimage]" value="1">是 <span></span></label>
          <label class="mt-radio mt-radio-outline"><input type="radio" name="setting[isselectimage]" value="0" checked> 否 <span></span></label>
        </div></td>
    </tr>
	<tr> 
      <td>表单显示模式</td>
      <td><div class="mt-radio-inline">
          <label class="mt-radio mt-radio-outline"><input type="radio" name="setting[show_type]" value="1" /> 图片模式 <span></span></label>
          <label class="mt-radio mt-radio-outline"><input type="radio"  name="setting[show_type]" value="0" checked/> 文本框模式 <span></span></label>
        </div></td>
	<tr> 
      <td>允许同时上传的个数</td>
      <td><input type="text" name="setting[upload_number]" value="10" size=3 class="input-text"></td>
    </tr>
    <tr> 
      <td>图片压缩大小：</td>
      <td><input type="text" name="setting[image_reduce]" value="" size="20" class="input-text"> 填写图片宽度，例如1000，表示图片大于1000px时进行压缩图片</td>
    </tr>
</table>