<?php $data['feConfig'] = new front_end();?>
<!DOCTYPE html>
<html>
<?php $this->load->view('template/head_mall',$data);?>
<body>
<?php $this->load->view($fe_file_path);?>
</body>
</html>