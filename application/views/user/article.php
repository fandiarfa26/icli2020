<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('user/_includes/top.php'); ?>

<!-- PAGEHEADER -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Article</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active">Article</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /PAGEHEADER -->

<div class="row">
    <!-- SUBMITTED ARTICLE -->
    <div class="col-12">
        <?php if (!$article) { ?>
            <div class="card">
                <h5 class="card-header bg-primary text-white">Form Article</h5>
                <form method="POST" action="<?= site_url('user/article/save') ?>" enctype="multipart/form-data">
                    <div class="card-body border-bottom">
                        <div class="form-group ">
                            <label for="title"><i class="fa fa-pencil-alt"></i> Article Title<font color="red">*</font></label>
                            <input id="title" type="text" class="form-control" name="title" required />
                        </div>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="form-group">
                            <label><i class="fa fa-file-alt"></i> Article File</label>
                            <h6 class="mt-2">Input Article Abstract<font color="red">*</font></h6>
                            <input type="file" name="abstract_file" accept="application/pdf, application/word" class="form-control" required />
                            <h6 class="mt-4">Input Article Full</h6>
                            <input type="file" name="full_article_file" accept="application/pdf, application/word" class="form-control" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="col-form-label"><i class="fa fa-user"></i> Author and Presenter<font color="red">*</font></label>
                            <h6 class="mt-2">Author<font color="red">*</font></h6>
                            <input type="text" class="form-control" name="author" required />
                            <h6 class="mt-4">Presenter<font color="red">*</font></h6>
                            <input type="text" class="form-control mb-2" name="presenter" required />
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        <?php } else { ?>
            <div class="card">
                <div class="card-header bg-primary ">
                    <h3 class="mb-0 text-white"><i class="fa fa-file-alt"></i> Article detail</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover"> 
                    <tbody><tr>
                        <td width="200">ID Article</td>
                        <td><b><?= $article->id ?></b></td>
                    </tr>
                    <tr>
                        <td width="200">Status</td>
                        <td><?php 
                        if ($article->status == 0) {
                            echo "<b style='color:grey'> <i> Wait</i></b>";
                        } else if ($article->status == 1) {
                            echo "<b style='color:green'> <i> Accepted</i></b>";
                        } else if ($article->status == 2) {
                            echo "<b style='color:red'> <i> Rejected</i></b>";
                        };

                        ?></td>
                    </tr>
                <form method="POST" action="<?= site_url('user/article/save') ?>" enctype="multipart/form-data">
                    <tr>
                        <td>Title</td>
                        <td style="display: flex;">
                            <div style="flex:1">
                                <b><?= $article->title ?></b>
                            </div> 
                            <div style="flex:2"><input type="text" name="title" class="form-control col-12" placeholder="Change Title"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Abstract File</td>
                        <td style="display: flex">
                            <div style="flex:1">
                                <b><?= $article->abstract_file ?></b>
                            </div> 
                            <div style="flex:2">
                                <input type="file" name="abstract_file" class="form-control col-12" placeholder="Change Title">
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>Full Article File</td>
                        <td style="display: flex">
                            <div style="flex:1">
                                <?php if (!empty($article->full_article_file)) { ?>
                                    <b><?= $article->full_article_file ?></b>
                                <?php }else{ ?>
                                    <b> - </b>
                                <?php } ?>
                            </div> 
                            <div style="flex:2">
                                <input type="file" name="full_article_file" class="form-control col-12" placeholder="Change Title">
                            </div> 
                        </td>
                    </tr>
                    <tr>  
                        <td>Author</td>
                        <td style="display: flex;">
                            <div style="flex:1">
                                <b><?= $article->author ?></b>
                            </div> 
                            <div style="flex:2"><input type="text" name="author" class="form-control col-12" placeholder="Change Author"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Presenter (Speaker)</td>
                        <td style="display: flex;">
                            <div style="flex:1">
                                <b><?= $article->presenter ?></b>
                            </div>    
                            <div style="flex:2"><input type="text" name="presenter" class="form-control col-12" placeholder="Change Presenter"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Presentation Place</td>
                        <td><?= (!empty($article->presentation_place))? $article->presentation_place: "-" ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                        </td>
                    </tr>
                </form>
                    </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- /SUBMITTED ARTICLE -->
</div>

<?php $this->load->view('user/_includes/bottom.php'); ?>
