<?php

        $blogs = [
            [
                "id" => 1,
                "title" => "Blog 1",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nisl vitae odio interdum pulvinar.",
            ],
            [
                "id" => 2,
                "title" => "Blog 2",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nisl vitae odio interdum pulvinar.",
            ],
            [
                "id" => 3,
                "title" => "Blog 3",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nisl vitae odio interdum pulvinar.",
            ]
        ];

        $slicedBlogs = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['push'])) {
                $newBlog = [
                    "id" => count($blogs) + 1,
                    "title" => "Blog 4",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nisl vitae odio interdum pulvinar."
                ];
                array_push($blogs, $newBlog);
            } elseif (isset($_POST['shift'])) {
                array_shift($blogs);
            } elseif (isset($_POST['unshift'])) {
                $newFirstBlog = [
                    "id" => count($blogs) + 1,
                    "title" => "Blog 5",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nisl vitae odio interdum pulvinar."
                ];
                array_unshift($blogs, $newFirstBlog);
            } elseif (isset($_POST['sort'])) {
                usort($blogs, function($a, $b) {
                    return $a['id'] - $b['id'];
                });
            } elseif (isset($_POST['splice'])) {
                array_splice($blogs, 1, 1, [
                    [
                        "id" => count($blogs) + 1,
                        "title" => "New Blog",
                        "description" => "This is a new blog added by array_splice."
                    ]
                ]);
            } elseif (isset($_POST['slice'])) {
                $slicedBlogs = array_slice($blogs, 1, 2);
            }
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>DEV Blogs</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-100 font-sans">

            <header class="bg-white shadow">
                <div class="container mx-auto px-6 py-4">
                    <h1 class="text-3xl font-bold text-gray-800">Dev Blogs</h1>
                </div>
            </header>

            <main class="container mx-auto px-6 py-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($blogs as $blog): ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-800"><?= $blog['title']; ?></h2>
                                <p class="text-gray-600 mt-2"><?= $blog['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>



                <div class="container mx-auto px-6 py-8">
                    <div class="flex justify-center">
                        <form action="" method="post">
                            <button type="submit" name="push" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Array Push</button>
                            <button type="submit" name="shift" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Array Shift</button>
                            <button type="submit" name="unshift" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Array Unshift</button>
                            <button type="submit" name="sort" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Sort by ID</button>
                            <button type="submit" name="splice" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Splice</button>
                            <button type="submit" name="slice" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Slice</button>
                        </form>
                    </div>
                </div>

                <br><hr><br>

                <?php if (!empty($slicedBlogs)): ?>
                <div class="container mx-auto px-6 py-8">
                    <h2 class="text-2xl font-semibold text-gray-800">Sliced Blogs</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($slicedBlogs as $blog): ?>
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <div class="p-6">
                                    <h2 class="text-xl font-semibold text-gray-800"><?= $blog['title']; ?></h2>
                                    <p class="text-gray-600 mt-2"><?= $blog['description']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

            </main>
        </body>
        </html>
