
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

        <div class="container my-4">
            <h4 class="mb-3">Ajouter actualités</h4>


            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#ajoutActualiteModal">
                + Ajouter une actualité
            </button>
            <div class="modal fade" id="ajoutActualiteModal" tabindex="-1" aria-labelledby="ajoutActualiteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="<?php echo e(route('ajout_actualite')); ?>" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image d'illustration</label>
                                <input type="file" class="form-control" name="image_actu" id="image" required>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date de publication</label>
                                <input type="date" class="form-control" name="date_actu" id="date" required>
                            </div>

                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre de l’article</label>
                                <input type="text" class="form-control" name="titre_actu" id="titre" required>
                            </div>

                            <div class="mb-3">
                                <label for="contenu" class="form-label">Contenu / Description</label>
                                <textarea class="form-control" name="description_actu" id="contenu" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="lien" class="form-label">Lien de l’article (facultatif)</label>
                                <input type="url" class="form-control" name="lien_actu" id="lien" placeholder="https://...">
                            </div>

                            <button type="submit" class="btn btn-primary" style="background-color: #E94F37; border: none;">Publier l’actualité</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr> <th>#</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Lien</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $actualite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $actu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td style="width: 100px;">
    <img src="<?php echo e($actu->image_actu ? asset('storage/' . $actu->image_actu) : asset('images/default.png')); ?>"
         alt="Image"
         class="img-thumbnail"
         style="width: 80px; height: 80px; object-fit: cover;">
</td>
                            <td><?php echo e($actu->titre_actu); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($actu->date_actu)->format('d M Y')); ?></td>
                            <td><?php echo e(Str::limit($actu->description_actu, 50)); ?></td>
                            <td><a href="<?php echo e($actu->lien_actu); ?>" target="_blank">Voir</a></td>
                            <td class="d-flex gap-2">
                                <a href="<?php echo e(route('edit', $actu->id)); ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <form action="<?php echo e(route('destroye', $actu->id)); ?>"method="POST" onsubmit="return confirm('Supprimer ?')">

                             <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>

                             <button class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                             </button>

                            </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\Ngf\cabinet\resources\views/table_actualite.blade.php ENDPATH**/ ?>