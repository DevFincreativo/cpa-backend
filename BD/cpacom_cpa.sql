-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-08-2025 a las 08:02:04
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cpacom_cpa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` text COLLATE utf8_unicode_ci,
  `img_en` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `img`, `img_en`, `created_at`, `updated_at`) VALUES
(4, 'banner_covers/VCVdf4sRH53vuQDwe9XpUax40Y8JI4EfbKimGjRS.png', 'banner_covers/3P3WeIvflid3GNCPqRUCbpzoZPRqyWEWdnvjh0sr.jpg', '2024-04-05 20:31:42', '2024-09-16 15:34:30'),
(5, 'banner_covers/Qugy1YdOceVul6KXcIZ3Rjv0wYenizX439tFPgD6.png', 'banner_covers/kf4EvqoL73oN2xUiOSap3FAq4IWcyLKiw6lCCOas.jpg', '2024-04-05 21:25:57', '2024-09-16 15:34:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8_unicode_ci,
  `nombre` text COLLATE utf8_unicode_ci,
  `nombre_en` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text COLLATE utf8_unicode_ci,
  `image_en` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `slug`, `nombre`, `nombre_en`, `created_at`, `updated_at`, `image`, `image_en`) VALUES
(5, 'categoria1', 'Categoria1', NULL, '2024-03-04 19:06:40', '2024-03-04 19:06:40', 'categoria_covers/WpF4CaErTYk3QOpIu1qLMe5jb51voCPhuBBo6p7x.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `telefono`, `empresa`, `correo`, `mensaje`, `created_at`, `updated_at`) VALUES
(5, 'Diego Fleitas', '0982139680', 'Fincreativo', 'diegofleitas@gmail.com', 'Cotizacion', '2024-04-12 17:03:53', '2024-04-12 17:03:53'),
(6, 'EDGAR HILDEBRAND', '+595981453965', 'CPA SAE', 'EDGAR@CPA.COM.PY', 'CONSULTA', '2024-04-12 17:05:12', '2024-04-12 17:05:12'),
(7, 'EDGAR HILDEBRAND', '+595981453965', 'CPA SAE', 'EDGAR@CPA.COM.PY', 'Prueba', '2024-04-16 15:58:46', '2024-04-16 15:58:46'),
(8, 'Zoe', '654936433', 'Agencia Markenting Pro', 'zoe.casas@agenciamarketingpro.com', 'Hola Cpa! Te escribo desde el Departamento de Prensa y hemos visto tu negocio como una excelente oportunidad para ser destacado en noticias.\n\n\n\nAl ser presentado en más de 60 periódicos digitales de alta autoridad, podemos mejorar la reputación y el posicionamiento de tu empresa.\n\n\n\nAdemás, cuando tus clientes busquen información sobre ti, verán tu relevancia y preferirán elegirte por encima de la competencia.¿Podrías proporcionarme un número de teléfono para ofrecerte dos meses gratuitos?\n\n\n\nGracias.', '2024-05-09 00:52:51', '2024-05-09 00:52:51'),
(9, 'Daniela', '654936433', 'Agencia Markenting Pro', 'daniela.dominguez@agenciamarketingpro.com', 'Hola Cpa! Te escribo desde el Departamento de Prensa y hemos visto tu negocio como una excelente oportunidad para ser destacado en noticias.\n\n\n\nAl ser presentado en más de 60 periódicos digitales de alta autoridad, podemos mejorar la reputación y el posicionamiento de tu empresa.\n\n\n\nAdemás, cuando tus clientes busquen información sobre ti, verán tu relevancia y preferirán elegirte por encima de la competencia.¿Podrías proporcionarme un número de teléfono para ofrecerte dos meses gratuitos?\n\n\n\nGracias.', '2024-05-29 20:14:30', '2024-05-29 20:14:30'),
(10, 'Saúl Carvalho', '76012353', 'Unipersonal', 'menteideal@hotmail.com', 'Buenas tardes, deseo importar su Almidón de Yuca y Almidón de Maíz a Bolivia, quisiera saber la escala de precios por cantidades.', '2024-08-15 22:13:30', '2024-08-15 22:13:30'),
(11, 'Dorj deegii', '97699190290', 'Chef pro', 'Deegii@chef.mn', 'Hello dear\n  My name is Degi .I am the manager of Chef pro Co., Ltd.Our company is in Ulan Bator, Mongolia.We are an imported food company with trading partners in more than 9 countries. I am writing to inquire about your interest in your products directly in MONGOLIA.\nWe would be able to create and foster brand recognition of your products in the Mongolia market.\nWill you send us your catalogue, with details of the prices and terms of payment?Can you give me MOQ?\nPlease let us know the terms on which you can give us some discount.\nWe have our own business website www.chef.mn If you have time visit our website.\nI am confident that we can meet your requirements needs.\nI am looking forward to hearing from you.', '2024-09-28 08:35:37', '2024-09-28 08:35:37'),
(12, 'Dorj deegii', '97699190290', 'Chef pro', 'Deegii@chef.mn', 'Hello dear\n  My name is Degi .I am the manager of Chef pro Co., Ltd.Our company is in Ulan Bator, Mongolia.We are an imported food company with trading partners in more than 9 countries. I am writing to inquire about interest in your products directly in MONGOLIA.\nWe would be able to create and foster brand recognition of your products in the Mongolia market.\nWill you send us your catalogue, with details of the prices and terms of payment?Can you give me MOQ?\nPlease let us know the terms on which you can give us some discount.\nWe have our own business website www.chef.mn If you have time visit our website.\nI am confident that we can meet your requirements needs.\nI am looking forward to hearing from you.', '2024-09-28 08:39:54', '2024-09-28 08:39:54'),
(13, 'IVON OITANA', '+34611538734', 'Himoinsa', 'ioitanabalcaza@gmail.com', 'Buenos días, quería saber la ubicación de stand en la feria SIAL de París. Muchas gracias. Saludos!', '2024-10-09 14:45:40', '2024-10-09 14:45:40'),
(14, 'Tony Phan', '+84347678416', 'EXPORTVN CO., LTD', 'sales5@exportvn.com', 'Dear Sir/Madam,\n\nThis is Tony from EXPORTVN Modified Starch.\nWe are one of the largest suppliers of cassava starch for food grade in Vietnam with nearly 20 different types.\nOur products have certificates: FSSC 22000, ISO, HACCP, FDA, HALAL and KOSHER.\n\nLooking forward to working with your company soon.\n\nBest regards,\nTony Phan (Mr.)', '2024-11-26 04:49:52', '2024-11-26 04:49:52'),
(15, 'Claudia Sordo San Blas', '+34 606302255', 'EXPORT-DUPRASA', 'c.sordo@duprasa.com', 'Somos una empresa española interesada en el el almidón de maíz. Nos podría enviar contacto del departamento de ventas. Gracias', '2025-01-09 11:57:06', '2025-01-09 11:57:06'),
(16, 'Miguel Velazquez', '0983296998', 'Comercial San Juan hape', 'miguelito309_@hotmail.com', 'Presupuesto de 25 kg', '2025-01-11 16:54:23', '2025-01-11 16:54:23'),
(17, 'Klaus Alberto Gentner', '491727631638', 'Gentner Global Trade', 'k.gentner@gentnerglobaltrade.com', 'Hola,\nHe trabajado por mas de 14 años en empresas internacionales en Factoring Internacional y Seguro de Crédito y realizo asesorias en estos temas para ayudar a negocios como el suyo a:\n\nOptimizar su flujo de caja a través de Factoring Internacional con prestamistas internacionales.\nProtegerse contra impagos con Seguro de Crédito.\nAprovechar oportunidades globales con mayor seguridad.\n\n¿le interesa explorar cómo estas soluciones pueden beneficiar a su empresa?\nEstoy disponible para una breve llamada o reunión cuando le convenga.\n\nQuedo atento a sus comentarios.', '2025-01-31 17:14:27', '2025-01-31 17:14:27'),
(18, 'BENJAMIN MILLER', '+5492616560033', 'www.dor-group.com', 'biniamin.miller@gmail.com', 'Estimados: Estarían interesados en productos para combinar con almidón, destinados a la formulación de adhesivos para corrugados? A la espera de vuestra atenta respuesta, les envío un cordial saludo. Ing Benjamín Miller- MENDOZA-ARGENTINA', '2025-02-20 18:02:03', '2025-02-20 18:02:03'),
(19, 'Johanna Alves', '09982983012', 'Supermercado La Preferida S.A', 'mercado.villasofia@hotmail.com', 'Necesito informacion de sus precios actualizados.', '2025-03-11 21:07:45', '2025-03-11 21:07:45'),
(20, 'Jonson Liang', '+86-15637310691', NULL, 'jonsonliang@baijiabz.com', 'Dear Purchase team officer:\nVery happy to  send you messages at this time!!\nMy name is Jonson Liang and I am marketing director of China Henan Baijia Packing. My company is TOP 3 kraft paper bag manufacturer in China.\nWish you can give me a chance and make business communication for your company paper bag requirement.\nI am looking forward to hear from you.\nThanks a lot.\nBest regards.', '2025-03-12 08:51:36', '2025-03-12 08:51:36'),
(21, 'Marcelo Gimenez', '0985172778', 'Feranza', 'contacto@feranza.net', 'Buenos días, estoy necesitando provisión de Almidón: 90 Tn./mes por un año., podría enviarnos cotización por favor.', '2025-03-18 17:28:54', '2025-03-18 17:28:54'),
(22, 'Iván Colchado Ley', '+595976161308', 'Pampeiro S.A', 'icolchado@pampeiro.com.py', 'Buenas tardes, un gusto saludarlos, mi nombre es Iván Colchado de PAMPEIRO S.A asesor de ventas, entre el 8 y 10 de abril estaré por la zona de Caaguazú y me complacería mucho hacer una visita comercial por la planta. Podría comunicarme también con un encargado para coordinar si fuera posible. Que tengan bendecido resto de viernes. Saludos Cordiales', '2025-03-28 18:27:49', '2025-03-28 18:27:49'),
(23, 'Orlando Montero Garcia', '+57 3152254205', 'Particular', 'ormoga5@gmail.com', 'Buenas tardes Sr Harry Hildebrand \nGerente General CPA\nVaquería, Caaguazú - Paraguay.\nCordial saludo. \n\nLe escribe Orlando Montero García, desde la ciudad de Neiva, capital del Departamento del Huila en Colombia. \nYo estuve en enero del 2024, en la ciudad de Caaguazú y Ud muy gentilmente fue a recogerme en su camioneta, me llevó a la ciudad de Vaquería, a conocer la fabrica de CPA que Ud dirige. En el camino paró para que conociera el cultivo de yuca o mandioca de gran extensión. Luego al final de la jornada ese mismo día, me llevó devuelta en su camioneta desde Vaquería a la ciudad de Caaguazú, en compañía de sus hijos. De lo cual quedé sin ninguna duda muy agradecido. \n  \nYo soy médico en ejercicio, trabajo en el área asistencial de Medicina Interna en el Hospital Universitario de esta ciudad  y en el área académica en pregrado y postgrado de medicina interna de la Universidad Surcolombiana, ubicada en esta ciudad - Neiva (Ubicada en la región centro sur de Colombia, a 300 km de Bogotá, a 5 horas en carro o 40 min en avión). \n\nSiempre me ha interesado el poder cultivar y/o comercializar la harina de mandioca en mi región y en lo posible a nivel país, en las diferentes áreas donde esta tiene aplicabilidad. Como tuve la fortuna de poderlo conocer y también de recorrer la planta de procesamiento y producción de CPA en Vaquería hace un poco mas de un año, me gustaría poder obtener mayor información de la dinámica, requisitos, precios, transporte, exportación, condiciones, etc y todo lo relacionado que Uds me puedan brindar, con el deseo de poder entablar una relación comercial con Uds que permita en un futuro cercano importar sus productos a Colombia para comercializarlos en los diferentes ámbitos. \n\nQuedo atento a su gentil apoyo e información. \nMuchas gracias. \nAtentamente, \n\nOrlando Montero García\nNeiva, Huila - Colombia. \n+57 3152254205\normoga5@gmail.com', '2025-03-31 00:02:17', '2025-03-31 00:02:17'),
(24, 'Orlando Montero Garcia', '+57 3152254205', 'Particular', 'ormoga5@gmail.com', 'Buenas tardes Sr Harry Hildebrand \nGerente General CPA\nVaquería, Caaguazú - Paraguay.\nCordial saludo. \n\nLe escribe Orlando Montero García, desde la ciudad de Neiva, capital del Departamento del Huila en Colombia. \nYo estuve en enero del 2024, en la ciudad de Caaguazú y Ud muy gentilmente fue a recogerme en su camioneta, me llevó a la ciudad de Vaquería, a conocer la fabrica de CPA que Ud dirige. En el camino paró para que conociera el cultivo de yuca o mandioca de gran extensión. Luego al final de la jornada ese mismo día, me llevó devuelta en su camioneta desde Vaquería a la ciudad de Caaguazú, en compañía de sus hijos. De lo cual quedé sin ninguna duda muy agradecido. \n  \nYo soy médico en ejercicio, trabajo en el área asistencial de Medicina Interna en el Hospital Universitario de esta ciudad  y en el área académica en pregrado y postgrado de medicina interna de la Universidad Surcolombiana, ubicada en esta ciudad - Neiva (Ubicada en la región centro sur de Colombia, a 300 km de Bogotá, a 5 horas en carro o 40 min en avión). \n\nSiempre me ha interesado el poder cultivar y/o comercializar la harina de mandioca en mi región y en lo posible a nivel país, en las diferentes áreas donde esta tiene aplicabilidad. Como tuve la fortuna de poderlo conocer y también de recorrer la planta de procesamiento y producción de CPA en Vaquería hace un poco mas de un año, me gustaría poder obtener mayor información de la dinámica, requisitos, precios, transporte, exportación, condiciones, etc y todo lo relacionado que Uds me puedan brindar, con el deseo de poder entablar una relación comercial con Uds que permita en un futuro cercano importar sus productos a Colombia para comercializarlos en los diferentes ámbitos. \n\nQuedo atento a su gentil apoyo e información. \nMuchas gracias. \nAtentamente, \n\nOrlando Montero García\nNeiva, Huila - Colombia. \n+57 3152254205\normoga5@gmail.com', '2025-03-31 00:02:17', '2025-03-31 00:02:17'),
(25, 'ANDRES GHIRINGHELLO', '+503 70380053', NULL, 'ghiringhello.a@gmail.com', 'Buen dia,\nEs un gusto saludarlos estaba revisando su catalogo de productos y estaba revisando que ustedes son productores de almidon de maiz nativo y almidon de yuca, queria saber saber cuanto es el minimo orden de compra y precio para poder comprar para El Salvador y en dado caso queria saber tambien si tienen un distribuidor en El Salvador.\nDe antemano quedo agradecido por su atencion\nCordialmente\nAndres Ghiringhello Huezo', '2025-04-15 19:11:14', '2025-04-15 19:11:14'),
(26, 'Thomas Chacko Hamad', '971588527504', 'Emirates Flight Catering - EKFC', 'procurement@ekfc-procurements.com', 'Hello Sir/Madam,\n \nI hope this email finds you well.\n \nOn behalf of Emirates Flight Catering, I’d like to invite your company to participate in our Supplier List Enrollment Scheme as we expand our network. This is a great opportunity to provide high-quality products and services for our in-flight catering operations.\n \nIf interested, please reply, and we will send you the necessary documentation, including the Expression of Interest (EOI) forms and Policy of Engagement Letter.\n \nWe look forward to the potential of working together.\n \nBest regards,\nThomas Hamad\nVendor Coordinator, Group Procurement & Contracts\nEmirates Flight Catering - EKFC', '2025-06-07 14:56:48', '2025-06-07 14:56:48'),
(27, 'Fiorella Leon', '+593 98 360 4933', 'Apracom S.A', 'fleon@apracom-ec.com', 'Buen dìa, \nActualmente estamos buscando un proveedor de ALMIDON DE YUCA // ALMIDON DE MAIZ como materia prima para nuestros productos en nuestra línea de negocio Ingredientes. Nos gustaría saber si tienen estos productos en su portafolio.\n\nPor favor, su ayuda proporcionando la siguiente información:\n\n•             Precio por tonelada (estamos interesados en un FCL de 20’)\n•             Incoterm FOB (puerto más cercano a su fábrica)\n•             Ficha técnica\n•             Detalles del empaque \n•             Cantidad que cabe en un FCL.', '2025-07-01 16:24:40', '2025-07-01 16:24:40'),
(28, 'Thomas Hamad', NULL, 'Emirates Flight Catering - EKFC', 'vendor@etendersupplier.com', 'Greetings from EKFC!\n\nI trust this email finds you well.\n\nWe are reaching out to invite your company to join the Emirates Flight Catering (EKFC) Vendor Registration Program. As part of our continued efforts to enhance our supplier network, we are eager to establish relationships with reliable and quality-driven vendors like yours.\n\nIf you are interested in registering as a vendor, please let us know by replying to this email. Once we receive your expression of interest, we will promptly send you the relevant documentation and further details on how to complete the registration process.\n\nWe are excited about the possibility of working together and look forward to the potential of a mutually beneficial partnership.\n\nShould you have any questions or require additional information, please do not hesitate to reach out.\n\nBest regards,\nThomas Hamad\nVendor Coordinator, Group Procurement & Contracts\nEmirates Flight Catering - EKFC', '2025-07-04 16:29:46', '2025-07-04 16:29:46'),
(29, 'Manuel Diaz Bridge', '+541132400629', 'DBS', 'manueldiazbridge@gmail.com', 'Estimados,\n\nMi nombre es Manuel Díaz Bridge y me encuentro desarrollando un proyecto de representación comercial de empresas paraguayas en el mercado argentino, con foco en productos industriales de calidad y gran proyección.\nEstuve investigando lo que respecta a la producción de tapioca para su comercialización en distintos mercados.\n\nMe gustaría conocer más sobre su catálogo de productos, capacidades de exportación y condiciones para evaluar la posibilidad de representar sus productos en Argentina. Creo que hay una oportunidad concreta de posicionamiento en nuestro país y estoy interesado en explorarla junto a ustedes.\n\nQuedo atento a su disponibilidad para poder ampliar la propuesta y responder cualquier consulta.\n\nSaludos cordiales,\nManuel Díaz Bridge\n+54 11 3240 0629\nmanueldiazbridge@gmail.com\nwww.linkedin.com/in/manuel-diaz-bridge-22015620a', '2025-07-12 00:31:25', '2025-07-12 00:31:25'),
(30, 'Carl Jabbour', '+442032901932', 'fiduciam', 'contact@flduciam.co.uk', 'Good day,\nWe believe your business is well-positioned for growth and would be glad to support your next phase with secured, flexible funding from £250k+, backed by institutional capital.\nIf of interest, please share:\n\nA brief business summary\n\nFunding amount\n\nIntended use\nWe’ll respond with a tailored proposal.\nRegards,', '2025-07-15 00:55:25', '2025-07-15 00:55:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `connection` text COLLATE utf8_unicode_ci,
  `queue` text COLLATE utf8_unicode_ci,
  `payload` longtext COLLATE utf8_unicode_ci,
  `exception` longtext COLLATE utf8_unicode_ci,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conversions_disk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(13, 'App\\Models\\Producto', 9, 'ac174c27-7126-4fc4-929b-2d630860f2b8', 'imagenes_productos', 'logonav', 'logonav.png', 'image/png', 'public', 'public', 63904, '[]', '[]', '[]', '[]', 2, '2024-03-04 19:07:33', '2024-03-04 19:30:20'),
(14, 'App\\Models\\Producto', 9, '55e8f362-c1f2-4bb6-a85c-38d49dda77f3', 'portada_productos', 'descarga (1)', 'descarga-(1).jpg', 'image/jpeg', 'public', 'public', 5255, '[]', '[]', '[]', '[]', 1, '2024-03-04 19:27:59', '2024-03-04 19:30:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_en` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_en` text COLLATE utf8_unicode_ci,
  `descripcion` text COLLATE utf8_unicode_ci,
  `descripcion_en` text COLLATE utf8_unicode_ci,
  `cuerpo` text COLLATE utf8_unicode_ci,
  `cuerpo_en` text COLLATE utf8_unicode_ci,
  `activo` tinyint(4) DEFAULT NULL,
  `orden` text COLLATE utf8_unicode_ci,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text COLLATE utf8_unicode_ci,
  `image_en` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `nombre_en`, `descripcion`, `descripcion_en`, `cuerpo`, `cuerpo_en`, `activo`, `orden`, `categoria_id`, `slug`, `created_at`, `updated_at`, `image`, `image_en`) VALUES
(9, 'Pruebadeproducto', '', '<p>Descripcion</p>', NULL, '<p>Cuerpo</p>', '', 1, '2', NULL, 'pruebadeproducto', '2024-03-04 19:07:33', '2024-03-04 19:07:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'cpa', 'admin@cpa.com.py', NULL, '$2a$12$OaJxhLq0Z4Yf7.FyUd/fg.qhaKuo8OAX0KcccJbQTBPhuH7cETD1.', NULL, '2023-08-24 20:06:52', '2023-08-24 20:06:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
