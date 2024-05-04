-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 08:35 PM
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
  `ingredients` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_table`
--

INSERT INTO `recipe_table` (`id`, `recipeName`, `recipeImage`, `categoryType`, `directions`, `prepTime`, `recipeVideo`, `ingredients`) VALUES
(5, 'Diya', 'https://media.licdn.com/dms/image/D4E03AQGupXuBdJC8fA/profile-displayphoto-shrink_800_800/0/1710311763134?e=2147483647&v=beta&t=YN7DHeJuzOHx-hJN-sKIXRJYL4gt55PbeTcP3I1p0v4', 'Indian', 'Marinate chicken. Grill or bake. Make tomato-based sauce. Combine and simmer.', '55 minutes', 'https://www.youtube.com/watch?v=cyX7iM6jhAI', 'Chicken, Yogurt, Tomato, Cream, Spices'),
(6, 'Caesar Salad', 'caesar_salad.jpg', 'Salad', 'Toss romaine lettuce with Caesar dressing. Add croutons and Parmesan cheese.', '15 minutes', NULL, 'Romaine lettuce, Caesar dressing, Croutons, Parmesan cheese'),
(7, 'Chocolate Chip Cookies', 'chocolate_chip_cookies.jpg', 'Dessert', 'Cream butter and sugar. Add eggs and vanilla. Mix in flour and chocolate chips. Bake.', '20 minutes', 'https://www.youtube.com/watch?v=Z8qoNs4P_fk', 'Butter, Sugar, Eggs, Vanilla extract, Flour, Chocolate chips'),
(8, 'Spaghetti Bolognese', 'spaghetti_bolognese.jpg', 'Italian', 'Cook minced meat with onions, garlic, and tomatoes. Serve over cooked spaghetti.', '60 minutes', NULL, 'Ground beef, Onion, Garlic, Tomatoes, Spaghetti'),
(9, 'Sushi Rolls', 'sushi_rolls.jpg', 'Japanese', 'Prepare sushi rice. Roll with seaweed, fish, and vegetables. Slice and serve with soy sauce.', '45 minutes', 'https://www.youtube.com/watch?v=_hiClrL27j0', 'Sushi rice, Nori (seaweed), Fish (e.g., salmon, tuna), Vegetables (e.g., cucumber, avocado)'),
(10, 'Roast Chicken', 'roast_chicken.jpg', 'Main Dish', 'Season chicken. Roast in the oven until golden brown and cooked through.', '90 minutes', NULL, 'Whole chicken, Salt, Pepper, Herbs (e.g., rosemary, thyme)'),
(11, 'Tomato Basil Soup', 'tomato_basil_soup.jpg', 'Soup', 'Saute onions and garlic. Add tomatoes and basil. Blend until smooth. Serve hot.', '30 minutes', NULL, 'Tomatoes, Onion, Garlic, Fresh basil, Chicken or vegetable broth'),
(12, 'Guacamole', 'guacamole.jpg', 'Mexican', 'Mash avocados with lime juice, onion, and cilantro. Season with salt and pepper.', '15 minutes', NULL, 'Avocados, Lime juice, Onion, Cilantro, Salt, Pepper'),
(13, 'Beef Stir Fry', 'beef_stir_fry.jpg', 'Asian', 'Stir-fry beef with vegetables in a hot wok. Add soy sauce and other seasonings.', '20 minutes', NULL, 'Beef (e.g., flank steak), Bell peppers, Broccoli, Soy sauce, Garlic, Ginger'),
(14, 'Greek Salad', 'greek_salad.jpg', 'Salad', 'Combine tomatoes, cucumbers, olives, and feta cheese. Dress with olive oil and vinegar.', '15 minutes', NULL, 'Tomatoes, Cucumbers, Olives, Feta cheese, Olive oil, Vinegar'),
(15, 'Apple Pie', 'apple_pie.jpg', 'Dessert', 'Prepare pie crust. Fill with sliced apples, sugar, and spices. Bake until golden brown.', '60 minutes', 'https://www.youtube.com/watch?v=ab9HZv3jHbM', 'Apples, Sugar, Cinnamon, Nutmeg, Pie crust'),
(16, 'Kasimir Dorsey', 'Enim eaque in ration', NULL, NULL, NULL, NULL, NULL),
(17, 'Rylee Mckinney', 'At duis modi quibusd', NULL, NULL, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

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
