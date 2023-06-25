<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lessons') }}
        </h2>
    </x-slot>
    <?php
    include(app_path('Helpers/getLessons.php'));
?>
    <!-- Page content -->
    <div class="d-flex flex-row mt-4">
        <!--Search bar-->
        <div class="filter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-options">
                            <div class="d-flex flex-column">
                                <div class="filter-option mb-1">
                                    <label for="category">Category:</label>
                                    <div class="checkbox-options">
                                        <?php

                                        $categories = searchUniqueCato("category");

                                        foreach ($categories as $category) {
                                            echo '<div class="form-check">';
                                            echo '<input class="form-check-input" type="checkbox" value="' . $category . '" id="category1">';
                                            echo ' <label class="form-check-label" for="' . $category . '">' . $category . '</label>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="filter-option mb-1">
                                    <label for="level">Level:</label>
                                    <div class="checkbox-options">
                                        <?php

                                        $levels = searchUniqueCato("level");

                                        foreach ($levels as $level) {
                                            echo '<div class="form-check">';
                                            echo '<input class="form-check-input" type="checkbox" value="'.$level.'" id="'.$level.'">';
                                            echo ' <label class="form-check-label" for="'.$level.'">'.$level.'</label>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button id="searchButton" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="lesson-search-result" style="max-width: 85%;width: 90%;">

            <?php

            $lessons = searchLessons();

            foreach ($lessons as $lesson) {
                /*
                 * Display lesson details (e.g., $lesson->title, $lesson->description, etc.)
                 *       <!--Lesson cards-- >
                 */
                echo '<div class="row" >';
                echo '    <div class="col-md-12" >';
                echo '        <div class="card mb-3" >';
                echo '            <div class="d-flex flex-row" >';
                echo '                <div class="col-md-4 " style = "display: contents" >';
                echo '                    <img src = " ' . $lesson->image_url . ' " class="card-img-left img-fluid" style = "max-height: 200px; height: 100%; object-fit: contain;" alt = "Lesson 1" >';
                echo '                </div >';
                echo '                <div class="col-md-8" >';
                echo '                    <div class="card-body" >';
                echo '                        <h5 class="card-title" > ' . $lesson->title . ' </h5 >';
                echo '                        <p class="card-text" > ' . $lesson->description . ' .</p >';
                echo '                        <p class="card-text" ><strong > Level:</strong > ' . $lesson->level . ' </p >';
                echo '                        <p class="card-text" ><strong > Chef:</strong > ' . $lesson->chef . ' </p >';
                echo '                        <p class="card-text" ><strong > Category:</strong > ' . $lesson->category . ' </p >';
                echo '                        <a href = "#" class="btn btn-primary" > Enroll Now </a >';
                echo '                    </div >';
                echo '                </div >';
                echo '            </div >';
                echo '        </div >';
                echo '    </div >';
                echo '</div >';
            }


            ?>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    </div>
</x-app-layout>
