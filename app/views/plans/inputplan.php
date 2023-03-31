<?php require APPROOT . '/views/inc/header.php'; ?>
<form method="POST" action="<?php echo URLROOT ?>/plans/inputplan">
    <div class="row">
        <div class="col-sm-6 col-md-6 mx-auto my-auto">
            <div class="card mt-2">
                <div class="card-header bg-info text-white">
                    <h3>INPUT PLANLOT STT_EXPORT</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="lbl_Line" class="form-label">
                            <strong>Line :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="text" class="form-control <?php echo (!empty($data['line_err'])) ? 'is-invalid' : ''; ?>" name="line" placeholder="Line" value="<?php echo $data['line']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['line_err']; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Planlot" class="form-label">
                            <strong>Plan Lot :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="text" class="form-control <?php echo (!empty($data['planlot_err'])) ? 'is-invalid' : ''; ?>" name="planlot" placeholder="Plan lot" value="<?php echo $data['planlot']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['planlot_err']; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Procode" class="form-label">
                            <strong>Pro Code :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="text" class="form-control <?php echo (!empty($data['procode_err'])) ? 'is-invalid' : ''; ?>" name="procode" placeholder="Procode" value="<?php echo $data['procode']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['procode_err']; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Ponumber" class="form-label">
                            <strong>PO Number :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="text" class="form-control <?php echo (!empty($data['ponumber_err'])) ? 'is-invalid' : ''; ?>" name="ponumber" placeholder="PO Number" value="<?php echo $data['ponumber']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['ponumber_err']; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Qty" class="form-label">
                            <strong>Qty :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="number" class="form-control <?php echo (!empty($data['qty_err'])) ? 'is-invalid' : ''; ?>" name="qty" placeholder="Qty" value="<?php echo $data['qty']; ?>" min="0">
                        <span class="invalid-feedback"><?php echo $data['qty_err']; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Description" class="form-label">
                            <strong>Description :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="text" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>" name="description" placeholder="Description" value="<?php echo $data['description']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['description_err']; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="lbl_Date" class="form-label">
                            <strong>Production Date :</strong> <sup style="color: red;">*</sup>
                        </label>
                        <input type="date" class="form-control <?php echo (!empty($data['productiondate_err'])) ? 'is-invalid' : ''; ?>" name="productiondate" value="<?php echo $data['productiondate']; ?>">
                        <span class="invalid-feedback">
                            <?php echo $data['productiondate_err']; ?>
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" formmethod="POST">
                        <i class="fa-regular fa-floppy-disk"></i>
                        Save
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-upload"></i>
                        Upload
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>