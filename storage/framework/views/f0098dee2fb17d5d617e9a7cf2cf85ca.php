
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end mb-3">
    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addRealisationModal">
        <i class="bi bi-plus-circle me-2"></i> Ajouter une réalisation
    </button>
</div>
<!-- Modal Ajout Réalisation -->
<div class="modal fade" id="addRealisationModal" tabindex="-1" aria-labelledby="addRealisationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addRealisationModalLabel">
                    <i class="bi bi-plus-circle me-2"></i>Ajouter une Réalisation
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="<?php echo e(route('ajout_realisation')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="modal-body">

                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(session('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre du projet" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="description" rows="3" class="form-control" placeholder="Description..."></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Contexte</label>
                            <textarea name="contexte" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Intervention</label>
                            <textarea name="intervention" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Résultat</label>
                            <textarea name="resultat" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Message</label>
                            <textarea name="message" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Images</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                            <small class="text-muted">
                                Vous pouvez sélectionner plusieurs images.
                            </small>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                        Fermer
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-save me-2"></i>Enregistrer
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped align-middle">

    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Contexte</th>
            <th>Intervention</th>
            <th>Résultat</th>
            <th>Message</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

    <?php $__currentLoopData = $realisations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e($realisation->titre); ?></td>

            <td><?php echo e(Str::limit($realisation->description, 50)); ?></td>

            <td><?php echo e(Str::limit($realisation->contexte, 50)); ?></td>

            <td><?php echo e(Str::limit($realisation->intervention, 50)); ?></td>

            <td><?php echo e(Str::limit($realisation->resultat, 50)); ?></td>

            <td><?php echo e(Str::limit($realisation->message, 50)); ?></td>

            <td>

                <?php if($realisation->images?->isNotEmpty()): ?>

                    <div class="d-flex flex-wrap gap-1">

                        <?php $__currentLoopData = $realisation->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <img src="<?php echo e(asset($img->image)); ?>"
                                 width="60"
                                 height="60"
                                 class="rounded border"
                                 style="object-fit: cover;">

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                <?php else: ?>
                    <span class="text-muted">Aucune image</span>
                <?php endif; ?>

            </td>

            <td class="d-flex gap-1">

                <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal<?php echo e($realisation->id); ?>">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="<?php echo e(route('destroy', $realisation->id)); ?>"
                      method="POST"
                      onsubmit="return confirm('Supprimer ce projet ?')">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>

                </form>

            </td>

        </tr>

        <!--  MODAL EDIT (inchangé mais complet) -->
        <div class="modal fade" id="editModal<?php echo e($realisation->id); ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <form action="<?php echo e(route('update_realisation', $realisation->id)); ?>"
                          method="POST"
                          enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="modal-header">
                            <h5 class="modal-title">Modifier la réalisation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <input type="text" name="titre"
                                   value="<?php echo e($realisation->titre); ?>"
                                   class="form-control mb-2">

                            <textarea name="description" class="form-control mb-2"><?php echo e($realisation->description); ?></textarea>

                            <textarea name="contexte" class="form-control mb-2"><?php echo e($realisation->contexte); ?></textarea>

                            <textarea name="intervention" class="form-control mb-2"><?php echo e($realisation->intervention); ?></textarea>

                            <textarea name="resultat" class="form-control mb-2"><?php echo e($realisation->resultat); ?></textarea>

                            <textarea name="message" class="form-control mb-2"><?php echo e($realisation->message); ?></textarea>

                            <!--  AJOUT IMAGES -->
                           <!-- AJOUT NOUVELLES IMAGES -->
<div class="mb-3">

    <label class="fw-bold">
        Ajouter de nouvelles images
    </label>

    <input type="file"
           name="images[]"
           multiple
           class="form-control">

</div>

<!-- IMAGES EXISTANTES -->
<div class="mb-3">

    <label class="fw-bold">
        Images existantes
    </label>

    <div class="d-flex flex-wrap gap-3 mt-2">

        <?php $__currentLoopData = $realisation->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="border rounded p-2 text-center">

                <img src="<?php echo e(asset($img->image)); ?>"
                     width="100"
                     height="100"
                     class="img-thumbnail"
                     style="object-fit: cover;">

                <!-- CHECKBOX -->
                <div class="form-check mt-2">

                    <input class="form-check-input"
                           type="checkbox"
                           name="delete_images[]"
                           value="<?php echo e($img->id); ?>"
                           id="img<?php echo e($img->id); ?>">

                    <label class="form-check-label text-danger"
                           for="img<?php echo e($img->id); ?>">

                        Supprimer

                    </label>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                Annuler
                            </button>

                            <button class="btn btn-success">
                                Enregistrer
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\Ngf\cabinet\resources\views/table_realisation.blade.php ENDPATH**/ ?>