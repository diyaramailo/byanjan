-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 09:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byanjan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `region` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingredient_id` int(11) NOT NULL,
  `ingredient_type` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `ingredient_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_table`
--

CREATE TABLE `recipe_table` (
  `id` int(11) NOT NULL,
  `recipeName` varchar(255) DEFAULT NULL,
  `recipeImage` varchar(255) DEFAULT NULL,
  `categoryType` varchar(255) DEFAULT NULL,
  `directions` text DEFAULT NULL,
  `prepTime` varchar(100) DEFAULT NULL,
  `recipeVideo` varchar(255) DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_table`
--

INSERT INTO `recipe_table` (`id`, `recipeName`, `recipeImage`, `categoryType`, `directions`, `prepTime`, `recipeVideo`, `ingredients`, `is_approved`, `user_id`) VALUES
(5, 'Diya', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Marinate chicken. Grill or bake. Make tomato-based sauce. Combine and simmer.', '55 minutes', 'https://www.youtube.com/watch?v=cyX7iM6jhAI', 'Chicken, Yogurt, Tomato, Cream, Spices', 1, NULL),
(6, 'Caesar Salad', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Toss romaine lettuce with Caesar dressing. Add croutons and Parmesan cheese.', '15 minutes', NULL, 'Romaine lettuce, Caesar dressing, Croutons, Parmesan cheese', 1, NULL),
(7, 'Chocolate Chip Cookies', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Cream butter and sugar. Add eggs and vanilla. Mix in flour and chocolate chips. Bake.', '20 minutes', 'https://www.youtube.com/watch?v=Z8qoNs4P_fk', 'Butter, Sugar, Eggs, Vanilla extract, Flour, Chocolate chips', 1, NULL),
(8, 'Spaghetti Bolognese', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Cook minced meat with onions, garlic, and tomatoes. Serve over cooked spaghetti.', '60 minutes', NULL, 'Ground beef, Onion, Garlic, Tomatoes, Spaghetti', 1, NULL),
(9, 'Sushi Rolls', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Prepare sushi rice. Roll with seaweed, fish, and vegetables. Slice and serve with soy sauce.', '45 minutes', 'https://www.youtube.com/watch?v=_hiClrL27j0', 'Sushi rice, Nori (seaweed), Fish (e.g., salmon, tuna), Vegetables (e.g., cucumber, avocado)', 1, NULL),
(10, 'Roast Chicken', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Season chicken. Roast in the oven until golden brown and cooked through.', '90 minutes', NULL, 'Whole chicken, Salt, Pepper, Herbs (e.g., rosemary, thyme)', 1, NULL),
(11, 'Tomato Basil Soup', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Saute onions and garlic. Add tomatoes and basil. Blend until smooth. Serve hot.', '30 minutes', NULL, 'Tomatoes, Onion, Garlic, Fresh basil, Chicken or vegetable broth', 1, NULL),
(12, 'Guacamole', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Mash avocados with lime juice, onion, and cilantro. Season with salt and pepper.', '15 minutes', NULL, 'Avocados, Lime juice, Onion, Cilantro, Salt, Pepper', 1, NULL),
(13, 'Beef Stir Fry', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Stir-fry beef with vegetables in a hot wok. Add soy sauce and other seasonings.', '20 minutes', NULL, 'Beef (e.g., flank steak), Bell peppers, Broccoli, Soy sauce, Garlic, Ginger', 1, NULL),
(14, 'Greek Salad', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Combine tomatoes, cucumbers, olives, and feta cheese. Dress with olive oil and vinegar.', '15 minutes', NULL, 'Tomatoes, Cucumbers, Olives, Feta cheese, Olive oil, Vinegar', 1, NULL),
(15, 'Apple Pie', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', 'Prepare pie crust. Fill with sliced apples, sugar, and spices. Bake until golden brown.', '60 minutes', 'https://www.youtube.com/watch?v=ab9HZv3jHbM', 'Apples, Sugar, Cinnamon, Nutmeg, Pie crust', 1, NULL),
(16, 'Kasimir Dorsey', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Plateful_of_Momo_in_Nepal.jpg/640px-Plateful_of_Momo_in_Nepal.jpg', 'Hilly', NULL, NULL, NULL, NULL, 1, NULL),
(19, 'Cheyenne Zamora', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaXdQXBbJ9RTvHeTm3fSi1A8SgvnLBTZyM7QkglXmeSw&s', 'Himalayan', 'Tenetur lorem sunt i', 'Consequuntur eu dolo', 'In hic vel quia adip', 'Fuga Quis a fuga E', 1, 23),
(20, 'Chicken Fry', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3t3BT3Dib5EnDVdHe1t7212Dvs4zimweiMyBfPwZP7Q&s', 'Himalayan', 'Consequatur optio e', 'Pariatur Lorem in l', 'Vero qui facilis ut ', 'Odit quod eaque labo', 1, 23),
(21, 'Priscilla Wall', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3t3BT3Dib5EnDVdHe1t7212Dvs4zimweiMyBfPwZP7Q&s', 'Himalayan', 'Consequatur optio e', 'Pariatur Lorem in l', 'Vero qui facilis ut ', 'Odit quod eaque labo', 1, 23),
(22, 'Lyle Mcclure', 'Dolore commodi solut', 'Himalayan', 'Nihil tempore proid', 'Provident ab ducimu', 'In iure velit labori', 'Eaque id natus hic l', 1, 23),
(23, 'Carla Pollard', 'Quia eu molestiae qu', 'Terai', 'Cupiditate et omnis ', 'Possimus dignissimo', 'Sapiente eum sit ad', 'Aut ex suscipit fugi', 1, 23),
(24, 'Rhona Garza', 'Iure ab ut similique', 'Hilly', 'Alias adipisicing la', 'Ad quam consectetur ', 'Aliquip amet ipsum', 'Unde laudantium sit', 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date_posted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `recipe_id`, `rating`, `comment`, `date_posted`) VALUES
(1, 23, 19, 2, NULL, NULL),
(2, 23, 21, 2, NULL, NULL),
(3, 23, 20, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `address`, `phone`, `gender`, `password`, `role`) VALUES
(20, 'Diya Tamrakar', 'a@a.com', 'Koteshor', '9802346747', 'female', '$2y$10$t/sPGn6yNjA7yTxUYLqnLupzSOP.IF55Kpygz1pb0aMoPpCzRnsw2', 'admin'),
(21, 'Nuna Das', 'n@n.com', 'Godawari', '980000000', 'female', '$2y$10$kFV37bNMArZ1EvhhmKx1QO0KV39wVgNRBAiToObOTO6CqsVDfRsRS', 'admin'),
(22, 'DIya Nuna', 'dn@dn.com', 'test', '98000000', 'female', '$2y$10$EO.olXv67uNeXC57mnI..e9Fcjya25pYfBCfjKeU7Xm7jHr1xdTxS', 'user'),
(23, 'Diya Tamrakar', 'a@aa.com', 'test', '9808723883', 'female', '$2y$10$14.ZnCSzVwHTLN1Pa8jUIOKSMDqPdEXlcGANmTVx0ITnZtCopLWSi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `recipe_table`
--
ALTER TABLE `recipe_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipe_table`
--
ALTER TABLE `recipe_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe_table`
--
ALTER TABLE `recipe_table`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
