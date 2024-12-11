-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2024 at 08:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diggers`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2),
(17, '2024-08-24-050001', 'App\\Database\\Migrations\\TbFounder', 'default', 'App', 1731895493, 3),
(18, '2024-11-13-051814', 'App\\Database\\Migrations\\AddPenulisAndSinopsisToTbBlog', 'default', 'App', 1731895532, 4),
(19, '2024-11-14-024124', 'App\\Database\\Migrations\\CreateAboutTable', 'default', 'App', 1731895532, 4),
(20, '2024-11-15-023037', 'App\\Database\\Migrations\\TbMeta', 'default', 'App', 1731895532, 4),
(21, '2024-11-24-050157', 'App\\Database\\Migrations\\TbLinkFounder', 'default', 'App', 1731895549, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_general_ci COMMENT 'Content for about section',
  `value` text COLLATE utf8mb4_general_ci COMMENT 'Brand values',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `content`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Digifusion is a leading company in digital solutions, focused on delivering top-notch technology and innovation to drive businesses forward.', 'Diggers is an integration platform that helps connect various applications and systems within a company, ensuring seamless communication and smooth operations. More than just a platform, Diggers acts as your learning partner, supporting your growth and adaptation in the digital world. With a constantly evolving digital platform, Diggers stays with you every step of the way, offering long-term support to meet the ever-changing needs of your business.', '2024-11-18 02:05:57', '2024-11-18 02:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_artikel` int NOT NULL,
  `judul_artikel` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'The next tech stack challenge: Combatting AI misalignment', 'b1.jpeg', 'As AI continues to evolve and transform how we work, it\'s clear that harnessing its full potential requires more than just excitement about its capabilities. The rapid adoption of AI in SaaS apps is creating a new challenge—misalignment across teams and processes—which is why it\'s crucial for organizations to take a strategic, thoughtful approach.\n\nIn this article, I discuss the steps businesses can take to avoid falling into the trap of AI misalignment and how a composable, adaptable mindset will set the foundation for long-term success with AI. I hope it sparks ideas for how your organization can take the next step in your AI journey.', '2024-08-14 12:47:26'),
(2, 'iPaaS in an AI-driven world', 'b2.jpeg', 'AI has become a transformative force in the tech world, and it’s increasingly clear that legacy solutions simply can’t keep up with this pace of change.\n\nIn this article, I explore why embracing a modern, AI-enabled iPaaS is key to thriving in this new world. A flexible, intelligent iPaaS can bridge the gap between IT and business teams, empowering organizations to integrate AI across their tech stack seamlessly. I hope the insights shared here inspire your own journey toward unlocking AI’s full potential.', '2024-08-07 12:47:26'),
(3, 'Expanding on-premise capabilities with our new agent', 'b3.jpeg', 'The seismic shift from on-premise to the cloud has transformed many organizations, breaking down barriers, increasing scale, cutting costs, and sparking innovation in a host of industries that had remained stagnant for decades. For example, Telehealth, especially during COVID-19, ensured non-emergency care was still available. \n\nIn the enterprise market, certain areas like collaboration applications, customer relationship management (CRM), and human resources have much higher cloud penetration. Still, not all parts of the software industry have been so quick to ride the cloud wave. The ERP market, for example, is still heavily focused on on-premise deployments. In a 2023 ERP market report, Gartner found that 40% of revenue came from on-premises offerings and 60% from cloud offerings and forecasted a split of approximately 25% on-premises and 75% cloud by 2027. Even with the market predicted to shrink, 25% of a 43 billion-dollar industry is still significant. ', '2024-07-31 12:47:26'),
(4, 'Q&A: Inside Bynder’s integration strategy', 'b4.jpeg', 'We recently had the pleasure of chatting with Bill Keiffer, Solutions Architect at Bynder, a leading digital asset management (DAM) platform. For Bynder’s customers, the ability to easily integrate various tools and services is crucial for managing diverse content efficiently. In our conversation, Bill shared his insights on how Bynder leverages the power of the Tray Universal Automation Cloud to accelerate the delivery of high-quality integrations to enhance efficiency and deliver exceptional value to their clients. \n\nLet’s dive into the conversation and explore how Bynder is making waves in the world of digital asset management with Tray.ai.\n\n1. Hi Bill, thanks so much for taking the time to talk with us today about Bynder and the Tray-powered integrations you offer customers. Can you give us an overview of Bynder and how it uses the Tray platform?\n\nSure thing. Bynder is a digital asset management platform used by some of the most iconic brands around the world to manage their content lifecycle. Content comes in many different forms from many different places so, as you can imagine, offering a wide range of integrations within our product is a core value driver for us and is really important for our customers. \n\nI’m a Solutions Architect at Bynder which means I oversee the various integrations we offer. These integrations are powered by the Tray Universal Automation Cloud, which we’ve embedded directly into our product and appears as a self-service integration marketplace for our customers.\n\n2. What were some of the integration challenges you faced before deciding to use Tray to embed integrations directly into the Bynder application?\n\nInitially, we built integrations in-house or with partners which was a huge lift and required significant time, maintenance, and technical expertise. Building integrations in-house comes with some very big problems. As you add more and more, the amount of maintenance that goes into keeping them running grows. We knew it wasn’t sustainable, especially as we entered this rapid growth phase.\n\nPartners can be a great resource to build integrations. But we would end up in situations where we want to offer an integration that’s very important to us, but that integration is not nearly as important to our partners. They may be poorly maintained, and then we have a bad customer experience. \n\nSo embedding an iPaaS was the obvious solution for us since we could embed a fully functioning integration platform into our application, and offer powerful integrations at a reasonable cost.\n\n3. So what led you to choose Tray as your integration platform?\n\nA few departments at Bynder were already using Tray to integrate and automate some internal processes. Additionally, we had chosen Tray to be a preferred vendor of ours. So what that means is when a client came to us and said, “Hey, we want to build this integration. Can you recommend a platform?” Of all the iPaaS platforms out there, we decided to recommend Tray.\n\nSo through that relationship, we were already aware of Tray\'s technical prowess, ease of use, and scalability. When we started running into these integration challenges, we evaluated many different solutions, including expanding our partner play or building a specialized team.\n\nHowever, our existing relationship with Tray and the positive feedback from our engineering and product teams made it a clear choice. We knew we had a partner that we could work with. We knew that it was a powerful platform that could do what we wanted. So it was a natural progression for our relationship with Tray, and it’s been a complete success.\n\n4. How has Tray impacted your integration development speed and efficiency?\n\nSince adopting Tray, we’ve significantly improved our integration output. To put it in perspective, before Tray, we managed to roll out six or seven integrations in the span of about three or four years. In the 18 months that we’ve had Tray, we’ve rolled out around 30. \n\nThis velocity boost has been orders of magnitude better than what we could achieve through traditional engineering pipelines. \n\n5. What kind of cost savings have you seen by using Tray?\n\nBefore Tray, building a single integration involved an entire team of people working for weeks or even months. You can imagine with just the direct costs of those salaries, you know, that\'s expensive. But in addition to that, you also have QA issues. We have DevOps that has to create the infrastructure that the integration can run on. And then all the maintenance goes into that, server maintenance, the DevOps resources to continuously keep track of it. All of those things together are significant direct costs, but also a significant overhead.\n\nWith Tray, we remove a lot of those costs. We remove the huge teams. We remove all the DevOps overhead. We remove that QA team. And we essentially can just build with a handful of people. Now, it\'s just me and one other person managing around 30 integrations for hundreds of clients, which has been a great bargain.\n\n6. What impact has Tray had on Bynder\'s customer experience?\n\nTray absolutely has improved our customer experience by making integrations more affordable and responsive. We\'re now able to offer integrations at a lower cost, so clients can connect systems that were previously too expensive for us to consider building. And that\'s been a springboard for us to build and integrate even much more complex and much more engaging integrations for them.\n\nThe other big point of the customer experience that has greatly improved is our ability to respond to issues in the integrations. When building integrations, inevitably, you are going to run into bugs, you\'re going to run into problems, you\'re going to run into situations that you didn\'t foresee and you didn\'t test for. With Tray, we can see those issues in real time, so we can go in and look at the logs, fix it on the fly, and deploy within hours or sometimes even minutes. That improved responsiveness has been a huge driver of our client experience and a big part of why many of our clients get a lot of value out of the integrations we offer. \n\n7. You talked about custom-built or partner-built integrations being unreliable. Has building integrations on Tray improved reliability?\n\nAbsolutely. In the two years we\'ve been using Tray, it has been nothing but reliable. When anyone in my organization or a client asks, “Can you do this with some integration or with some process?” I can always say yes, knowing that Tray can handle anything we throw at it. It has run solidly, reliably, and at scale 24 hours a day, 365 days a year. \n\n8. Did you feel that there was a steep learning curve for building integrations on Tray?\n\nWith any platform, there is going to be a learning curve. Tray is unique in its combination of ease of use and power. So to me, I think it\'s very accessible for both novices and experienced engineers to ramp up quickly and also see immense value out of the things they are able to build in a short amount of time. \n\nI also feel like the platform is continuously innovating, with features like the Connector Developer Kit and the new enhanced AI capabilities, so there are always new things to learn. I love that Tray offers tons of resources  for learning about Tray. For instance, I’m a big fan of the Tray Community as it’s been an invaluable resource for me in my builder journey.\n\n9. How important is community engagement for using Tray effectively?\n\nBeing an active member of the Tray Community has been a huge part of my building ability. Learning from and sharing knowledge with other users enriches our understanding and application of the platform. Real-time interactions with fellow builders is the best as it lets me solve problems quickly and gain a lot of unique insights from other builders. \n\n10. As you know, Tray.io is now Tray.ai to better reflect our focus on integration and automation with AI—through our augmented building capabilities—and for AI—by infusing AI into business processes. How is AI influencing Bynder\'s future with Tray?\n\nAI is a big part of our strategy at Bynder, driven by the needs of our clients who manage vast amounts of assets. We\'re excited about the potential of Tray for future integrations and functionality enhancements. Clients are constantly coming up with ideas for AI-driven features, and we\'re looking forward to exploring these possibilities with Tray.ai.', '2024-07-24 12:47:26'),
(5, 'Reduce costs, boost efficiency with AI knowledge agents', 'b5.jpeg', 'For the past 18 months, people have been experimenting with AI. It’s easy, fun, and often very useful when it comes to helping with day-to-day tasks (for instance, I used GPT-4 to suggest the format for this blog post).\n\nHowever, actually implementing AI within your business processes is challenging and, if not done properly, can lead to tricky situations – as Air Canada recently discovered when they were held liable for bad advice provided by their chatbot.\n\nSuccessfully infusing AI within your organization can be massively beneficial as we’ve seen recently with Klarna’s AI assistant handling over two-thirds of customer conversations in its first month.\n\nHow have Klarna seen success with their support agent and managed to avoid potential AI pitfalls? This is likely due to their implementation of a Retrieval Augmented Generation (RAG) pipeline, ensuring their AI assistant provides accurate information and takes the correct actions when handling customer queries.\n\nSo if you…\n\nHaven’t got a team in place implementing AI solutions throughout your organization\nHaven’t heard of a RAG pipeline before and how it can massively reduce errors when using AI\nWant to make your support teams as efficient as Klarna’s (who are predicting an additional $40 million profit in 2024 as a result of implementing an agent)\n…then this blog post is for you.\n\nI’ll briefly explain what a RAG pipeline is and how it ensures reliable results. Then, I’ll talk through how the Tray Universal Automation Cloud is the perfect platform to develop a nimble RAG pipeline without being locked into a particular vendor. Finally, I’ll dive into how we’ve been using various data sources and Large Language Models (LLMs) to completely transform our processes with Tray-powered RAG pipelines.\n\nThis is all functionality that is available right now with Tray, so I’ll also offer guidance on how you can get started and implement advanced AI processes within your organization in just a couple of weeks.\n\nYou can also see me chat about our intelligent knowledge agent and show it off with others from the Tray product team in a recent LinkedIn Live event. Watch it on-demand.', '2024-07-17 12:47:26'),
(6, 'Capture leads reliably with our lead intake automation templates', 'b6.jpeg', 'ello there RevOps practitioners! To better help you improve lead funnel efficiency, we have dozens of new templates available, all geared towards the critical lead lifecycle jobs to be done for lead intake:\n\nCapture leads from any source\nCleanse them before they hit source of truth\nRecord them to your source of truth (aka CRM or MAP)\nThese templates empower builders like yourself to hit the ground running fixing your leaky funnels with a best-in-breed automation platform like Tray.\n\nInterested in learning more about these templates and seeing them in action? Check out our webinar diving deep into this topic! Watch here\n\nSo, why did we start here? \n\nFor starters, reliable lead intake is essential for maximizing the return on your marketing investment - without a high quality process in place, revenue will suffer – but the process is nuanced and complex. We often hear about the pains MOPs/RevOps teams face in making sure leads are processed at the speed their prospects and businesses demand. Whether that be due to having to manually process CSVs, their MAPs being incapable of accommodating all their lead sources, campaign teams dropping new systems in their lap, or perhaps bad data coming in from legacy programs – there’s simply A LOT of complexity that ends up bogging down quality leads in the funnel.\n\nThe best way to stamp these issues out, is to start from the top; aka - lead intake. By ensuring this stage of your lead lifecycle is working flawlessly, you can steadily work your way further into the lead lifecycle, shoring up the order of operations to ensure no leads slip through the cracks, with each one receiving the attention and timely follow up they deserve.\n\nTo do this right, you need the flexibility to handle the unique requirements of your GTM strategy and RevOps processes. No matter what is thrown at you, a world class automation solution like Tray opens those black boxes up, removes manual work, and empowers your RevOps teams to focus their time on more meaningful tasks.\n\nWe’ve been hard at work behind the scenes developing a solution architecture for the templates that’s simple enough for you to get started with the fundamentals. If your needs are more nuanced, don’t worry – the flexibility of Tray leaves plenty of room for you to extend them as required.\n\nAt its core, the lead intake process is fairly straightforward, with 3 questions that need to be answered:\n\n“Where are the leads coming from?” (aka, the lead source)\n“Where are the leads going to?” (aka, the lead destination)\n“What steps do we take to ensure we’re ready to engage/take action?” (aka - the data cleansing processes)\nWhen architecting a solution for these 3 questions, it is important to understand the business logic of what we are trying to achieve. First, the lead source would be the location where the leads are coming from. This could be a platform like LinkedIn or Facebook; a place where you capture leads externally, or a CSV/Excel file containing an already populated list of new leads, say from a trade show you sponsored.\n\nSecond, before uploading those leads to a source of truth system, we need to make sure each lead is cleansed properly. This can include data normalization (each lead’s properties must match a certain format), data validation (each lead must have a certain list of data points), data cleansing (removing any “bad eggs” such as fake emails or blank entries), and data enrichment (supplementing existing data by making additional calls to platforms like Clearbit or ZoomInfo). \n\nIn the templates we created, for example, regardless of the lead source, each is required to have a valid email syntax and to have the following data points:\n\nFirst Name\nLast Name\nEmail\nPhone Number\nCompany\nLead Source\nUTM source, medium, and campaign\nFinally, the lead destination would most often be a customer relationship management (CRM), or marketing automation platform (MAP), like Salesforce, Hubspot, or Marketo. Of course, nobody wants duplicates there, so each template checks to see if a lead already exists first, either updating an existing one, or creating a new lead if none are found.', '2024-07-10 12:47:26'),
(7, 'Working with ADP Workforce Now APIs for HR and payroll', 'b7.jpeg', 'ADP Workforce Now: HR and payroll challenges\nHR teams have their hands full as they work to manage all the processes that make up the employee lifecycle. Particularly, payroll processes can be time-consuming and error-prone, especially as your organization scales. Manually keeping employee data up-to-date across the many different HR technologies that you use in your day-to-day work can prevent you from tackling more-strategic initiatives, such as employee engagement and workplace transformation.\n\nYet payroll that’s fast, on time, and accurate is critical to delivering a seamless employee experience and driving retention. Research suggests 82 million US workers have experienced payroll errors, with 42% of them feeling discontent because of these errors.  As a result, ensuring that your payroll processes are optimized is essential to driving revenue and reducing employee churn—the cost of employee turnover is expected to be as high as $680 billion.', '2024-07-04 09:01:36'),
(8, 'Marketo lead scoring: The essentials', 'b8.jpeg', 'Marketo lead scoring is a powerful way to qualify leads and prospects. However, it can be challenging to set up lead scoring for the first time, especially when dealing with lead data scattered across multiple tools. In this definitive guide to lead scoring in Marketo, we’ll walk you through the ins and outs of Marketo lead scoring to ensure your sales team can prioritize the best leads first. Use the table of contents above to skip directly to the sections you need, or read on for the full story.\n\nIf you’re already a seasoned Marketo pro, hop down to our section on advanced Marketo lead scoring strategies. Otherwise, keep scrolling to learn why lead scoring is so important, the difference between implicit and explicit lead scoring criteria, and how you can set up lead scoring in your own Marketo instance.\nYou can implement lead scoring in marketing automation platforms such as Marketo to determine a prospect’s current level of interest in your business, how engaged they are, and if they’re a good fit to purchase your product. Lead scoring also commonly relies on prospects’ demographics, including their job title, industry, and annual company revenue, to ensure they align with your ideal customer profile (ICP). While every organization’s lead scoring rules are different, they serve a similar purpose of prioritizing the best leads first. \n\nUltimately, lead scoring helps you identify which leads are ready to move to sales and which will require more time and likely more nurturing before they are ready for an email from your sales team. But before we dive into advanced strategies for scoring, let’s review some of the common approaches that marketing and marketing operations professionals use to score their leads.\n', '2024-06-27 09:01:36'),
(9, 'Has PowerShell lost its power for IT operations?', 'b9.jpeg', 'PowerShell has long-been the entry point solution for IT teams venturing into task automation. As an open-source, cross-platform task automation solution from Microsoft, PowerShell lets IT professionals configure systems and automate administrative tasks from the command line on Windows, MacOS, or Linux. However, as organizations scale and their IT operations become more complex and require customizations,  they often hit a wall with PowerShell. \n\nIn this blog, we\'ll learn about PowerShell\'s pros and cons and how IT teams can overcome the barriers to meeting the growing complexity and demands of modern IT operations.\nWhen organizations begin building their IT operational function, they typically start with a one-person department. This department is heavily budget-constrained and often operates as a “catch-all” for anything IT-related. Therefore, their capacity to automate manual processes is limited, and they often try to fight fires one at a time. \n\nFor these IT departments, PowerShell is a natural fit.  Most of the functionality is free, and the learning curve is relatively short as they can be automated directly within the command line. PowerShell is widely accepted because it facilitates remote command, allowing administrators to perform remote operations on multiple systems through Windows Management instrumentation and WS-management protocol.\n\nWhat are the advantages of PowerShell? \nEasy automation: PowerShell implements tasks using simple, single-function command-lets, or cmdlets, which are lightweight commands native to PowerShell. As a single-function tool, cmdlets can be used separately or combined to solve complex tasks.\nSelf-service building: PowerShell lets each team, in an Exchange build their cmdlets independently. This “self-service” model is crucial as it allows developers to manage their features as they build them, eliminating feature and script development bottlenecks.\nCross-product composability: PowerShell can be used for different services and controlled by a single IT admin. This makes PowerShell functional in networks where various services are dependent or independent of each other, like a corporate network.', '2024-06-20 09:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_artikel` int UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `penulis` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sinopsis` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`, `penulis`, `sinopsis`) VALUES
(1, 'Mobil Berwarna Merah: Simbol Keberanian dan Performa Tinggi', 'red1.jpg', 'Mobil berwarna merah selalu menjadi simbol keberanian dan performa tinggi di dunia otomotif. Artikel ini akan mengulas bagaimana warna merah yang mencolok dan berani tidak hanya menarik perhatian di jalan raya tetapi juga mencerminkan karakter pengendara yang percaya diri dan dinamis. Warna merah yang kuat sering diasosiasikan dengan kecepatan dan ketangguhan, menjadikan mobil ini pilihan utama bagi mereka yang menginginkan performa tanpa kompromi.<br><br>Selain dari aspek visualnya yang mencolok, artikel ini akan membahas bagaimana mobil berwarna merah sering dilengkapi dengan mesin bertenaga tinggi dan teknologi canggih yang mendukung kinerja maksimal. Pembaca akan diajak untuk memahami bagaimana kombinasi antara warna yang berani dan fitur performa ini membuat mobil merah tidak hanya menonjol dari segi penampilan tetapi juga dari segi performa di jalanan.', '2024-08-14 12:47:26', NULL, NULL),
(2, 'Mengungkap Daya Tarik Mobil Berwarna Merah: Kombinasi Gaya dan Kecepatan', 'red2.jpg', 'Mobil berwarna merah selalu berhasil mencuri perhatian, tidak hanya karena warna yang mencolok tetapi juga karena kombinasi sempurna antara gaya dan kecepatan yang ditawarkannya. Artikel ini akan mengeksplorasi daya tarik unik dari mobil merah yang mampu menggabungkan estetika yang memukau dengan kinerja mesin yang tangguh. Dengan desain yang agresif dan teknologi yang mendukung kecepatan tinggi, mobil merah menjadi pilihan utama bagi mereka yang mengutamakan performa tanpa harus mengorbankan gaya.<br><br>Artikel ini juga akan membahas berbagai aspek teknis dari mobil berwarna merah, termasuk inovasi dalam aerodinamika dan material yang digunakan untuk meningkatkan kecepatan dan efisiensi. Pembaca akan mendapatkan wawasan mendalam tentang mengapa mobil berwarna merah tidak hanya menarik secara visual tetapi juga menawarkan pengalaman berkendara yang penuh adrenalin dan memuaskan.', '2024-08-07 12:47:26', NULL, NULL),
(3, 'Kenapa Mobil Merah Selalu Menjadi Pusat Perhatian di Jalan?', 'red1.jpg', 'Mobil berwarna merah selalu menjadi pusat perhatian di jalan raya, menarik pandangan ke mana pun ia pergi. Artikel ini akan menjelaskan fenomena ini, mengeksplorasi bagaimana warna merah yang mencolok mampu menonjol di antara kerumunan dan menciptakan kesan yang kuat dan tak terlupakan. Dengan daya tarik visual yang tak terbantahkan, mobil merah sering kali dipilih oleh mereka yang ingin membuat pernyataan berani di jalan raya.<br><br>Selain dari aspek estetika, artikel ini akan mengulas bagaimana mobil merah sering dikaitkan dengan karakteristik pengendara yang kuat dan penuh semangat. Dengan menggabungkan warna yang mencolok dengan performa mesin yang unggul, mobil merah tidak hanya memikat mata tetapi juga memberikan kinerja yang sebanding dengan penampilannya. Pembaca akan diajak untuk memahami lebih dalam mengapa mobil berwarna merah selalu berhasil menjadi pusat perhatian di mana pun mereka berada.\r\n', '2024-07-31 12:47:26', NULL, NULL),
(4, 'Mengapa Mobil Berwarna Biru Menjadi Simbol Ketenangan dan Keanggunan di Jalan Raya', 'blue1.jpg', 'Mobil berwarna biru telah lama dianggap sebagai simbol ketenangan dan keanggunan di jalan raya. Warna biru yang identik dengan langit dan laut, memberikan perasaan stabilitas dan ketenangan bagi pengendara maupun mereka yang melihatnya. Di artikel ini, kita akan mengeksplorasi bagaimana warna biru pada mobil mampu menciptakan aura elegan yang menarik perhatian tanpa terlihat berlebihan, serta mengapa warna ini sering menjadi pilihan favorit bagi mereka yang menghargai keseimbangan antara estetika dan kenyamanan.<br><br>Selain aspek visual, mobil berwarna biru juga sering dikaitkan dengan kualitas premium dan performa yang handal. Artikel ini akan membahas bagaimana pabrikan mobil memanfaatkan warna biru untuk mencerminkan teknologi canggih dan fitur-fitur unggulan yang ditawarkan, menjadikannya bukan hanya pilihan warna yang indah, tetapi juga mencerminkan standar kualitas yang tinggi. Dengan penelusuran mendalam, pembaca akan memahami mengapa mobil berwarna biru tetap menjadi pilihan utama bagi banyak pengendara di seluruh dunia.', '2024-07-24 12:47:26', NULL, NULL),
(5, 'Keunggulan Mobil Berwarna Biru: Gabungan Estetika dan Teknologi Canggih', 'blue2.jpg', 'Mobil berwarna biru tidak hanya memikat mata dengan estetika yang menawan, tetapi juga sering kali dilengkapi dengan teknologi canggih yang memberikan pengalaman berkendara yang luar biasa. Dalam artikel ini, kita akan melihat bagaimana kombinasi antara desain yang elegan dan fitur teknologi terbaru membuat mobil berwarna biru menjadi pilihan yang sempurna bagi mereka yang menginginkan lebih dari sekadar kendaraan.<br><br>Artikel ini akan mengulas berbagai teknologi mutakhir yang sering hadir dalam mobil berwarna biru, seperti sistem hiburan canggih, fitur keselamatan terbaru, dan efisiensi bahan bakar yang optimal. Pembaca akan diajak untuk mengeksplorasi bagaimana paduan antara estetika dan inovasi ini membuat mobil biru bukan hanya menarik secara visual, tetapi juga unggul dalam hal kinerja dan kenyamanan, menjadikannya pilihan ideal untuk pengendara modern.', '2024-07-17 12:47:26', NULL, NULL),
(6, 'Mobil Biru: Pilihan Tepat untuk Pengendara yang Mengutamakan Ketenangan dan Kualitas', 'blue1.jpg', 'Bagi pengendara yang mencari kombinasi ketenangan dan kualitas, mobil berwarna biru adalah pilihan yang tepat. Artikel ini akan membahas mengapa warna biru pada mobil sering kali dipilih oleh mereka yang menginginkan suasana berkendara yang damai dan menenangkan, sekaligus menuntut standar kualitas tinggi dalam setiap aspek kendaraan mereka.<br><br>Dalam artikel ini, kita akan mengeksplorasi bagaimana mobil biru mampu memberikan perasaan nyaman dan aman, baik saat berkendara di kota maupun dalam perjalanan jauh. Dari desain interior yang dirancang untuk menenangkan hingga fitur keselamatan yang memastikan perlindungan maksimal, mobil biru menawarkan pengalaman berkendara yang tak tertandingi. Artikel ini akan memberikan wawasan mendalam bagi pembaca yang mempertimbangkan untuk memilih mobil berwarna biru sebagai teman setia di jalan raya.', '2024-07-10 12:47:26', NULL, NULL),
(7, 'Elegansi dan Ketangguhan dalam Mobil Berwarna Abu-abu: Simbol Modernitas', 'gray1.jpg', 'Mobil berwarna abu-abu telah lama dikenal sebagai simbol elegansi dan ketangguhan di dunia otomotif. Warna abu-abu yang netral namun memikat mencerminkan modernitas dan kecanggihan, menjadikannya pilihan ideal bagi mereka yang mencari kendaraan dengan desain yang berkelas namun tetap kuat dan fungsional. Artikel ini akan mengeksplorasi bagaimana mobil berwarna abu-abu mampu memadukan estetika yang sederhana dengan kesan kuat, menciptakan kendaraan yang tidak hanya enak dipandang, tetapi juga andal dalam berbagai situasi.<br><br>Selain dari penampilannya yang elegan, mobil abu-abu juga sering kali dihubungkan dengan kualitas dan daya tahan yang tinggi. Artikel ini akan membahas bagaimana pabrikan mobil menggunakan warna abu-abu untuk menonjolkan fitur-fitur unggulan yang ada, seperti teknologi keselamatan terbaru, performa mesin yang handal, dan efisiensi bahan bakar. Dengan mobil berwarna abu-abu, pengendara dapat menikmati kombinasi sempurna antara gaya dan ketangguhan, yang mencerminkan kepribadian modern dan dinamis.', '2024-07-04 09:01:36', NULL, NULL),
(8, 'Mengapa Mobil Berwarna Abu-abu Menjadi Pilihan Favorit di Jalan Raya?', 'gray2.jpg', 'Mobil berwarna abu-abu sering kali menjadi pilihan favorit di jalan raya, dan artikel ini akan mengungkap alasan di balik popularitas tersebut. Warna abu-abu yang serbaguna dan netral memungkinkan mobil untuk tampil menarik tanpa terlihat mencolok, membuatnya ideal bagi mereka yang mencari kesan profesional dan dewasa. Dalam artikel ini, pembaca akan diajak untuk memahami bagaimana warna abu-abu mampu menawarkan keseimbangan sempurna antara estetika dan fungsionalitas, yang menjadikannya pilihan populer di kalangan berbagai jenis pengendara.<br><br>Selain itu, artikel ini juga akan membahas aspek praktis dari memilih mobil berwarna abu-abu. Dari kemampuannya untuk menyembunyikan kotoran dan goresan kecil hingga fleksibilitasnya dalam berbagai kondisi pencahayaan, mobil abu-abu menawarkan banyak keuntungan praktis yang mungkin tidak dimiliki oleh warna lain. Dengan menggabungkan penampilan yang elegan dan praktis, mobil abu-abu terus menjadi salah satu pilihan teratas di pasar otomotif.', '2024-06-27 09:01:36', NULL, NULL),
(9, 'Kombinasi Gaya dan Fungsionalitas: Keunggulan Mobil Berwarna Abu-abu', 'gray1.jpg', 'Dalam dunia otomotif, mobil berwarna abu-abu sering kali dianggap sebagai simbol kombinasi yang sempurna antara gaya dan fungsionalitas. Warna abu-abu menawarkan penampilan yang canggih dan profesional, menjadikannya pilihan yang tepat untuk berbagai kebutuhan, mulai dari penggunaan sehari-hari hingga acara-acara resmi. Artikel ini akan mengeksplorasi bagaimana mobil berwarna abu-abu tidak hanya menonjolkan penampilan yang berkelas tetapi juga mengakomodasi berbagai fungsi yang dibutuhkan pengendara modern.<br><br>Lebih dari sekadar tampilannya yang menarik, mobil berwarna abu-abu juga dikenal karena kepraktisannya. Artikel ini akan membahas bagaimana warna ini mampu menyesuaikan diri dengan berbagai kondisi lingkungan dan gaya hidup, dari perkotaan hingga pedesaan. Dengan fokus pada aspek fungsionalitas, artikel ini akan mengungkapkan mengapa mobil abu-abu menjadi pilihan yang tepat bagi mereka yang menginginkan kendaraan yang tidak hanya terlihat bagus tetapi juga tahan lama dan serbaguna.', '2024-06-20 09:01:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_founder`
--

CREATE TABLE `tb_founder` (
  `id_founder` int UNSIGNED NOT NULL,
  `nama_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_founder` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_founder`
--

INSERT INTO `tb_founder` (`id_founder`, `nama_founder`, `foto_founder`, `jabatan_founder`, `deskripsi_founder`) VALUES
(1, 'Fernandes Raymond', 'founder1.png', 'Digital Marketing Trainer', 'Fernandes Raymond adalah seorang Digital Marketing Trainer berpengalaman yang mengkhususkan diri dalam membantu individu dan bisnis memahami serta menguasai strategi pemasaran digital terkini. Dengan latar belakang yang kuat di bidang pemasaran online, Fernandes memiliki keahlian dalam berbagai aspek digital marketing, termasuk SEO, iklan berbayar, media sosial, email marketing, dan analisis data.'),
(2, 'Dinda 2 ', 'f1.jpg', 'Digital Marketing Trainer 2', 'Sebagai seorang pelatih, ia dikenal karena metode pengajaran yang interaktif dan praktis, memungkinkan peserta untuk langsung mengaplikasikan ilmu yang diperoleh ke dalam strategi bisnis mereka. Fernandes juga sering berbicara di seminar, workshop, dan program pelatihan, membimbing banyak profesional menuju kesuksesan di era digital. 2'),
(4, 'Dista', 'f2.jpg', 'Digital Marketing Trainer', 'Sebagai seorang pelatih, ia dikenal karena metode pengajaran yang interaktif dan praktis, memungkinkan peserta untuk langsung mengaplikasikan ilmu yang diperoleh ke dalam strategi bisnis mereka. Fernandes juga sering berbicara di seminar, workshop, dan program pelatihan, membimbing banyak profesional menuju kesuksesan di era digital. 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelebihan`
--

CREATE TABLE `tb_kelebihan` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tumbnail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keunggulan`
--

CREATE TABLE `tb_keunggulan` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `clickbait` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keunggulan`
--

INSERT INTO `tb_keunggulan` (`id`, `judul`, `clickbait`, `deskripsi`, `logo`) VALUES
(1, 'Community', 'Engage with 250k+ users & 40k+ certified trained experts.', 'Join our vibrant community of over 250,000 active users and more than 40,000 certified experts ready to assist you. Here, you can interact, discuss, and share knowledge with experienced professionals, while gaining insights and solutions from trained spec', 'i1.png'),
(2, 'Partners', 'Extend the value of your investment with our 800 premier partners.\r\n\r\n', 'Maximize the value of your investment by partnering with our network of 800 premier partners. These carefully selected experts are committed to delivering top-tier solutions, ensuring that your resources are used efficiently to achieve the best possible o', 'i2.png'),
(3, 'Customer success', 'Get personalized care, at every step of your journey.\r\n\r\n', 'Receive personalized care tailored to your unique needs at every stage of your journey. From your initial consultation to ongoing support, we are dedicated to providing you with compassionate, individualized attention. Whether you are seeking guidance, tr', 'i3.png'),
(4, 'Professional services', 'Benefit from years of expertise and best practices from the founders of iPaaS.\r\n\r\n', 'Leverage the extensive knowledge and experience gained from years of expertise and best practices developed by the founders of iPaaS. By partnering with industry pioneers, you gain access to insights and innovative solutions that have been tested and refi', 'i4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` varchar(1028) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id`, `nama`, `jabatan`, `perusahaan`, `komentar`, `foto`) VALUES
(1, 'Sumandi', 'CEO', 'PT. Brantas Kali', 'Diggers helped me improve my digital marketing skills which are very much needed in today’s business world. This program is perfect for beginners as well as professionals who want to continue to grow.', 'k1.jpeg'),
(2, 'Jumadilah', 'Marketing', 'Nort Face Company', 'Diggers really helps us in the work process by providing several products that are related to what we do.', 'k3.jpeg'),
(3, 'Shinta Arsita', 'Co CEO', 'Berdendang With Us', 'I am not disappointed that I have trusted and partnered with Diggers because the results of the work that is there can and really helps us as clients, coupled with friendly service to clients that makes us comfortable to partner with Diggers.', 'k3.jpeg'),
(4, 'Heris Setiawanti', 'Sekertaris', 'Motor Valuable Corp.', 'It is true and not just what they say and say, but it is proven, from all the cooperation that we have done with our company with satisfactory results and can be said to be highly recommended for other companies, so what are you waiting for?', 'k4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link_founder`
--

CREATE TABLE `tb_link_founder` (
  `id_link_founder` int UNSIGNED NOT NULL,
  `id_founder` int UNSIGNED NOT NULL,
  `nama_link_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `icon_link_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_founder` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_link_founder`
--

INSERT INTO `tb_link_founder` (`id_link_founder`, `id_founder`, `nama_link_founder`, `icon_link_founder`, `link_founder`) VALUES
(1, 1, 'Instagram', '1731895972_8681e697a189d8f3fc75.png', 'https://www.instagram.com/fernandesraymond.id/'),
(2, 1, 'Facebook', '1731895984_9036f4b89f40431b094f.png', 'https://www.instagram.com/fernandesraymond.id/'),
(3, 2, 'Instagram', '1731895997_ece8da5e616310add512.png', 'https://www.instagram.com/fernandesraymond.id/'),
(5, 4, 'Instagram', '1731913947_757344a1f0207216c628.png', 'https://www.instagram.com/fernandesraymond.id/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meta`
--

CREATE TABLE `tb_meta` (
  `id_seo` int UNSIGNED NOT NULL,
  `nama_halaman` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_id` longtext COLLATE utf8mb4_general_ci,
  `meta_title_en` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_en` longtext COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_meta`
--

INSERT INTO `tb_meta` (`id_seo`, `nama_halaman`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`) VALUES
(1, 'Home', 'Beranda', 'Selamat datang di situs resmi kami, temukan informasi terkini tentang layanan kami di sini.', 'Home', 'Welcome to our official website, find the latest information about our services here.'),
(2, 'About Us', 'Tentang Kami', 'Ketahui lebih lanjut tentang sejarah, misi, dan visi perusahaan kami serta tim profesional kami.', 'About Us', 'Learn more about our company\'s history, mission, vision, and our professional team.'),
(3, 'Services', 'Layanan', 'Jelajahi layanan berkualitas yang kami tawarkan untuk memenuhi kebutuhan Anda dengan standar terbaik.', 'Services', 'Explore our high-quality services designed to meet your needs with the best standards.'),
(4, 'Blogs', 'Blog', 'Baca artikel terbaru kami untuk mendapatkan wawasan, tips, dan berita terkini dalam industri ini.', 'Blogs', 'Read our latest articles for insights, tips, and the latest news in this industry.'),
(5, 'Contact Us', 'Hubungi Kami', 'Hubungi kami untuk konsultasi atau pertanyaan lebih lanjut tentang layanan dan produk kami.', 'Contact Us', 'Contact us for consultations or further inquiries about our services and products.'),
(6, 'Partnership', 'Partnership', 'Ketahui lebih lanjut tentang sejarah, misi, dan visi perusahaan kami serta tim profesional kami.', 'Partnership', 'Learn more about our company\'s history, mission, vision, and our professional team.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_partnership`
--

CREATE TABLE `tb_partnership` (
  `id` int NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_perusahaan` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `kolaborasi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `masa` date NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_partnership`
--

INSERT INTO `tb_partnership` (`id`, `nama_perusahaan`, `deskripsi_perusahaan`, `kolaborasi`, `masa`, `logo`) VALUES
(1, 'Caliburn', 'Caliburn adalah perusahaan teknologi yang menyediakan solusi transformasi digital, dengan fokus pada platform Digifusion untuk integrasi sistem dan aplikasi bisnis. Didirikan pada 2018, Caliburn menawarkan layanan seperti otomatisasi bisnis, analitik data, dan strategi digital yang disesuaikan. Misinya adalah membantu bisnis meningkatkan efisiensi melalui teknologi modern dan solusi inovatif.', 'IT Architecture ', '2019-10-02', '1.png'),
(2, 'Conick', '\r\nConick adalah perusahaan teknologi yang mengkhususkan diri dalam solusi digital berbasis data. Dengan platform Digifusion, Conick mengintegrasikan sistem bisnis untuk meningkatkan efisiensi dan komunikasi. Fokus mereka adalah transformasi digital melalui analitik real-time dan otomatisasi AI, membantu perusahaan beradaptasi dan bersaing di era digital.', 'AI optimization', '2021-08-10', '2.png'),
(3, 'Cozi', 'Cozi adalah perusahaan teknologi yang berfokus pada penyederhanaan integrasi digital bagi bisnis kecil dan menengah. Melalui platform Digifusion, Cozi menyediakan solusi yang mudah digunakan untuk menghubungkan aplikasi bisnis dan sistem manajemen, membantu perusahaan tumbuh dengan efisiensi operasional yang tinggi.', 'Workspace', '2024-02-28', '3.png'),
(4, 'Crown', 'Sebagai pemimpin dalam solusi transformasi digital, Crown menggunakan Digifusion untuk menyatukan sistem perusahaan besar, mempercepat otomatisasi dan meningkatkan kemampuan analitik. Crown membantu klien mengoptimalkan setiap aspek operasional, dari rantai pasokan hingga manajemen pelanggan.', 'Workspace', '2020-03-31', '4.png'),
(5, 'Dillon', 'Dillon adalah perusahaan yang fokus pada pengembangan teknologi cloud dan integrasi digital melalui Digifusion. Dillon memungkinkan perusahaan untuk memigrasikan data dan aplikasi mereka ke platform cloud dengan lancar, sehingga meningkatkan aksesibilitas dan kolaborasi lintas tim secara global.', 'Database Integration', '2023-04-18', '5.png'),
(6, 'Havok', 'Havok menawarkan solusi teknologi disruptif melalui Digifusion, menghubungkan sistem yang kompleks di sektor industri berat dan manufaktur. Dengan pendekatan fokus pada otomatisasi dan kecerdasan buatan, Havok membantu bisnis mengoptimalkan produktivitas dan mengurangi biaya operasional.\r\n\r\n', 'AI optimization', '2024-06-19', '6.png'),
(7, 'Viscore', 'Viscore adalah perusahaan teknologi yang memanfaatkan Digifusion untuk menyatukan data dan aplikasi dalam ekosistem yang terpusat. Mereka fokus pada meningkatkan kemampuan analitik bisnis, membantu perusahaan dalam membuat keputusan yang lebih cepat dan berbasis data melalui integrasi dan otomatisasi.', 'Database Integration', '2020-10-07', '7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text,
  `deskripsi_produk_en` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(1, 'Getting Started: Google\nSheets', 'Workspace', 'pr1.jpg', 'Google Sheets is a web-based spreadsheet application that allows you to store and organize different types of information, much like Microsoft Excel. While Google Sheets does not offer all of Excel\'s advanced features, it\'s easy to create and edit spreadsheets ranging from the simple to the complex.\n\nWhile you might think spreadsheets are only used by certain people to process complicated numbers and data, they can actually be used for a variety of everyday tasks. Whether you\'re starting a budget, planning a garden, or creating an invoice or just about anything else you can think of, spreadsheets are a great way to organize information.', 'This grey-colored car offers the perfect combination of style and elegance. Its modern grey hue exudes luxury and professionalism, making it an ideal choice for those who prioritize aesthetics without compromising functionality. With its sleek aerodynamic design and refined details, this car not only captivates the eye but also enhances fuel efficiency, delivering a dynamic and enjoyable driving experience.<br><br>Behind its elegant appearance, this car is equipped with advanced technology that ensures comfort and safety on every journey. Features such as the latest navigation system, full connectivity with smart devices, and enhanced safety systems make this car more than just a vehicle—it’s a moving space that meets all your needs. Whether for daily use or long trips, this grey car is ready to accompany you with unmatched style and performance.'),
(2, 'Filter a list of objects by\ndate range', 'Data', 'km2.jpg', 'About this Snippet\nCopy\nPass this script a list of objects with a date property in them along with a start and/or end date and it will return each item from the list where the date property you specify falls in between the specified date range. The snippet comes with an extra script step that produces dummy data so you can test how the script works easily.', 'This yellow car is the perfect choice for those who want to stand out on the road. With its bright and striking yellow color, this car radiates energy and confidence, making it an ideal choice for those with a youthful and dynamic spirit. Its sporty design, combined with modern details, not only grabs attention but also reflects a strong and bold character.<br><br>Equipped with advanced technology, this car offers a driving experience that is not only enjoyable but also safe and comfortable. The latest infotainment system, easy connectivity with smart devices, and robust safety features make this car a reliable companion on every journey. With a responsive and efficient engine performance, this yellow car is ready to deliver an unforgettable driving experience, wherever you go.'),
(3, 'Filter List by Nested Value', 'Data', 'km3.png', 'About this Snippet\n\nCopy\nPass this list helper a list of objects then build out your filter(s). You can build out a nested object in the filter OR build an object in a previous step and pass it it (more complex, only necessary if you need to dynamically change the keys). Simplest is the way it is setup in this snippet. Hardcode the different layers of the object until you get to the value you want to filter on. You can hardcode OR map in your filter value. The snippet comes with demo data so you can view and test right from one of your workflows before applying it to your use case.', 'This green car brings together the harmony of nature and modern technology. Its fresh and calming green color reflects balance and environmental awareness, making it the perfect choice for those who embrace an eco-friendly lifestyle. The elegant and contemporary exterior design combines the beauty of nature with cutting-edge automotive innovation, creating a vehicle that is both captivating and distinctive.<br><br>Inside this car, you’ll find comfort and advanced technology designed to enhance your driving experience. Features like automatic climate control, a premium audio system, and state-of-the-art safety technology ensure that every journey is safe and enjoyable. With an efficient and environmentally friendly engine performance, this green car not only offers style but also a commitment to sustainability, making every drive feel more purposeful.'),
(4, 'Remove and Count Line\nBreaks from Text Block', 'Workspace', 'km2.jpg', 'This snippet offers a more advanced version of the typical \"find and replace\" functionality, focusing specifically on line breaks. Instead of simply replacing text, this script allows you to customize what you want to replace line breaks with, making it highly flexible for different use cases. Additionally, it provides an extra feature: the output will return the number of line breaks replaced, giving you more insight into how many modifications were made in the process.\n\nKey Features:\nReplace Line Breaks: The script enables you to target line breaks (\\n, \\r\\n, or other types depending on your use case) and replace them with any string of your choice.\n\nCustomizable Output: You have full control over what to replace the line breaks with—whether it\'s a space, a different character, or even another set of line breaks.\n\nCount of Replacements: After execution, the script will also provide a count of how many line breaks were replaced, which can be useful for logging, debugging, or validation purposes.\n\nDemo-Ready: The snippet comes with demo text so you can test it out immediately. You can check how it functions before integrating it into your actual production workflows.\n\nCollaborative Development: This snippet was developed through collaboration with members of the community, emphasizing the input and suggestions from a wide range of users. The original discussion that led to the creation of this script is available in the Slack community (though access to the thread may require community membership).', 'This blue car exudes tranquility and elegance on every journey. Its captivating blue color reflects stability and confidence, making it the perfect choice for those who appreciate both aesthetics and performance. With its aerodynamic design and precise detailing, this car offers the perfect blend of style and functionality, making it ideal for drivers who seek a vehicle that is both eye-catching and efficient.<br><br>Inside, the car is equipped with advanced technology to ensure your comfort and safety. From modern entertainment systems to the latest safety features, every detail is designed to provide an optimal driving experience. Its responsive and efficient performance, supported by eco-friendly technology, makes this blue car not only stand out in appearance but also in quality. With this car, every journey becomes more than just a commute; it becomes a memorable experience.'),
(5, 'Pagination Architecture', 'Design', 'pr1.jpg', 'The Simplified Pagination Architecture refers to an approach that streamlines the process of paginating through large sets of data across multiple pages. Pagination is crucial for handling large data sets efficiently, particularly when retrieving records from APIs, databases, or external services. This architecture aims to make the pagination process more efficient, easy to understand, and implement.\n\nIn the context of this simplified approach, the pagination logic is broken down into its most basic components while retaining flexibility for various services. The idea is to make it easier to paginate through records without overwhelming your system or hitting service rate limits, ensuring you receive manageable chunks of data at a time.', 'This red car brings passion and boldness to every drive. Its striking and vibrant red color symbolizes power and speed, making it the ideal choice for those seeking high performance and a stunning appearance. The dynamic design, with sharp lines, adds a sporty and aggressive look, while elegant details provide an unmatched touch of luxury.<br><br>Beyond its eye-catching appearance, this car is equipped with advanced technology to deliver an unforgettable driving experience. From its powerful drivetrain to the latest safety features, every aspect of this car is designed to offer a perfect balance of performance and safety. With this red car, you’re not just driving a vehicle; you’re making a statement with confidence and style.'),
(6, 'Tray Academy Labs', 'Studies', 'km3.png', 'The project mentioned involves importing a pre-configured workflow or project template, likely from a service such as Tray.io, and following specific instructions from their Tray Academy website. Tray.io is an automation platform that enables businesses to connect different services and automate processes through workflows.\n\nTo break this down further:\n\nImporting the Project:\nImport Process: You will start by importing the project file or template into your Tray.io account. This may involve downloading a file or accessing a template directly from within the Tray.io interface.\nIntegration of Services: The project likely involves setting up integrations between different services, such as connecting APIs from Salesforce, Google Sheets, or other services used in business workflows.\nCustomization: After importing, you might need to customize parts of the project, such as adding specific credentials (API keys or authentication tokens) for services you want to integrate.', 'This brown car exudes a warm and elegant vibe, perfect for those who appreciate sophistication in simplicity. The rich, deep brown color provides a unique and luxurious appearance while maintaining an earthy feel. With its captivating exterior design and smooth lines that highlight its luxury, this car is crafted to attract attention without being overly flashy. The brown hue not only adds character to the vehicle but also brings a calming, natural ambiance to both the driver and passengers.<br><br>Behind its charming appearance, this car is equipped with the latest technology to ensure maximum comfort and safety. Its efficient drivetrain and luxurious interior create an unparalleled driving experience. Modern features such as advanced navigation systems and seamless connectivity make every journey comfortable and enjoyable. With this brown car, you get the perfect combination of aesthetics and functionality, creating a truly special driving experience.'),
(7, 'Export Salesforce query to\nexisting Google Sheet', 'Workspace', 'km3.png', 'Overview\n\nCopy\nThis template allows you to take a small set of Salesforce records (maximum being 2,000), and update a Google Sheet that you are using for a report.\n\nThe resulting workflow can then be set to a schedule and will refresh the worksheet tab with an updated set of records as desired.\n\nYou could potentially expend this template by building new/ more worksheets within the spreadsheet to make reports and graphs from. Or once updated, use it to automatically generate weekly/ monthly/ etc scheduled reports for specific information.', 'This white car offers a timeless impression of cleanliness, elegance, and modernity. The bright and glossy white color accentuates its aerodynamic design, providing a fresh and sophisticated look on the road. This car exudes a calm luxury aura, perfect for those who appreciate simplicity and grace. With smooth lines and meticulously crafted details, this vehicle presents unparalleled aesthetics and enduring elegance.<br><br>Beyond its captivating appearance, this white car is also equipped with the latest technological features that ensure maximum comfort and safety. Its interior is designed with premium materials that offer superior comfort, while advanced technology such as a modern infotainment system and automated safety features make every journey safer and more enjoyable. This white car is the perfect blend of luxury, comfort, and performance, ready to accompany your every journey with style and confidence.'),
(8, 'Send email alert on\nworkflow failure', 'Workspace', 'pr1.jpg', 'Workflows using the Alert Trigger are highly beneficial for error handling within your production workflows and solutions. By setting up an alerting workflow, you can ensure that any issues, errors, or anomalies in your workflows are caught and addressed promptly. Here’s an expanded breakdown of how alerting workflows can be configured:\n\nAlerting Workflow for Individual Workflow(s) in the Same Workspace (Organization or Personal):\n\nYou can configure the alert trigger for specific workflows within the same workspace. For instance, if you have multiple workflows in an organization or personal workspace and only want certain critical workflows to trigger alerts, you can set this up on an individual basis.\nThis setup is particularly useful when different workflows handle tasks with varying importance. For example, workflows handling sensitive customer data might need stricter error handling and alerting than less critical ones.\nAlerting Workflow for All Workflows in the Organization Workspace:\n\nIn an organizational context, you can create a single alerting workflow that covers all workflows within the organization\'s workspace. This ensures that any errors occurring in any of the workflows will trigger an alert.\nThis centralized alert system is useful for larger teams or departments, where multiple workflows are running simultaneously, and having a single point for error alerts streamlines monitoring and troubleshooting.\nAlerting Workflow for All Workflows in a User’s Personal Workspace:\n\nIf you are working within a personal workspace, you can set up an alerting workflow that monitors all workflows you have in your personal account. Any issues in any of your personal workflows will trigger an alert, helping you manage errors effectively even across multiple processes.\nThis is especially helpful for individual users who may be running several automations but need to stay on top of potential failures without monitoring each one manually.', 'This pink car offers a fresh, unique, and stylish appearance, perfect for those who want to stand out on the road. The soft yet bold pink color adds a feminine and modern touch to the car’s design. With smooth lines and elegant curves, this vehicle exudes a dynamic and vibrant personality. Ideal for drivers who dare to express themselves, this car is the perfect blend of elegance and individuality.<br><br>Beyond its striking appearance, this pink car is also equipped with advanced features designed for comfort and safety. The interior, crafted with high-quality materials, offers superior comfort, while modern technology like smart navigation systems and automatic climate control ensures a pleasant and effortless driving experience. This car is the ideal choice for those who want to combine unique style with top-notch performance.'),
(9, 'Notify Slack when Salesforce Opportunity is \"Closed Won\"', 'Design', 'km2.jpg', 'Overview\n\nCopy\nThis template takes Salesforce opportunities that are marked \"Closed Won\", and shares a message on a Slack channel with the opportunity details. It can even send an image or emoji alongside to create emphasis.\n\nThe Salesforce trigger is fired every time an opportunity is updated.\n\nIf the change that fired the trigger was updating the stage name to \"Closed won\", then that change will alert the relevant Slack channel with said update.\nThis alerting workflow makes use of the Slack connector to send a single alert message to a predefined channel or conversation.', 'This orange car offers a bold and energetic appearance, reflecting a dynamic spirit and personality. The bright and striking orange color makes this car a focal point wherever it goes, highlighting its modern and sporty design. With sharp lines and strong curves, this car is designed for those who want to express an active and adventurous lifestyle. The orange hue not only adds a cheerful vibe but also infuses the vehicle with a unique character.<br><br>Behind its striking appearance, this orange car is also equipped with advanced features that ensure exceptional comfort and performance. Its spacious interior, complete with the latest technology such as modern entertainment systems and top-tier safety features, creates an unparalleled driving experience. This car is the perfect choice for those seeking a combination of standout aesthetics and reliable performance, ready to accompany every journey with style and confidence.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text,
  `deskripsi_perusahaan_en` text,
  `deskripsi_kontak_in` text,
  `deskripsi_kontak_en` text,
  `link_maps` text,
  `link_whatsapp` text,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'Diggers', 'image.png', ' Diggers is an integration platform that helps connect various applications <br>and systems within a company. We\'re more than just a platform; we\'re your learning partner.\n            <br>Our constantly evolving digital platform will be with you every step of the way.', 'Diggers is an integration platform that helps connect various applications and systems within a company. We\'re more than just a platform; we\'re your learning partner. Our constantly evolving digital platform will be with you every step of the way.', '', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13699.6667581078!2d112.6670083399892!3d-7.971868430040337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6298db1e5b70b%3A0xaf3552a89f1cc9f0!2sELECOMP%20INDONESIA!5e0!3m2!1sid!2sid!4v1728019475474!5m2!1sid!2sid\n', 'https://wa.me/6281455124062?text=Halo%20saya%20ingin%20bertanya', 'Favicon_PT-NAKAM-Foods-Indonesia_22082023083620.png', 'DAPOER ABCD - UMKM Binaan Kadin Kota Malang', 'slider-car1.png', 'Malang, Indonesia', '0812 3456 7890', 'weareDiggers@email.com', 'Hak Cipta ©2024. Seluruh Hak Cipta Dilindungi. Dirancang oleh Saya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_value`
--

CREATE TABLE `tb_value` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `clickbait` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_value`
--

INSERT INTO `tb_value` (`id`, `judul`, `clickbait`, `deskripsi`, `logo`) VALUES
(1, 'Community', 'Engage with 250k+ users & 40k+ certified trained experts.', 'Join our vibrant community of over 250,000 active users and more than 40,000 certified experts ready to assist you. Here, you can interact, discuss, and share knowledge with experienced professionals, while gaining insights and solutions from trained spec', 'i1.png'),
(2, 'Partners', 'Extend the value of your investment with our 800 premier partners.\r\n\r\n', 'Maximize the value of your investment by partnering with our network of 800 premier partners. These carefully selected experts are committed to delivering top-tier solutions, ensuring that your resources are used efficiently to achieve the best possible o', 'i2.png'),
(3, 'Customer success', 'Get personalized care, at every step of your journey.\r\n\r\n', 'Receive personalized care tailored to your unique needs at every stage of your journey. From your initial consultation to ongoing support, we are dedicated to providing you with compassionate, individualized attention. Whether you are seeking guidance, tr', 'i3.png'),
(4, 'Professional services', 'Benefit from years of expertise and best practices from the founders of iPaaS.\r\n\r\n', 'Leverage the extensive knowledge and experience gained from years of expertise and best practices developed by the founders of iPaaS. By partnering with industry pioneers, you gain access to insights and innovative solutions that have been tested and refi', 'i4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_founder`
--
ALTER TABLE `tb_founder`
  ADD PRIMARY KEY (`id_founder`);

--
-- Indexes for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_link_founder`
--
ALTER TABLE `tb_link_founder`
  ADD PRIMARY KEY (`id_link_founder`),
  ADD KEY `tb_link_founder_id_founder_foreign` (`id_founder`);

--
-- Indexes for table `tb_meta`
--
ALTER TABLE `tb_meta`
  ADD PRIMARY KEY (`id_seo`);

--
-- Indexes for table `tb_partnership`
--
ALTER TABLE `tb_partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_value`
--
ALTER TABLE `tb_value`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_artikel` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_founder`
--
ALTER TABLE `tb_founder`
  MODIFY `id_founder` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_link_founder`
--
ALTER TABLE `tb_link_founder`
  MODIFY `id_link_founder` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_meta`
--
ALTER TABLE `tb_meta`
  MODIFY `id_seo` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_partnership`
--
ALTER TABLE `tb_partnership`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_value`
--
ALTER TABLE `tb_value`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_link_founder`
--
ALTER TABLE `tb_link_founder`
  ADD CONSTRAINT `tb_link_founder_id_founder_foreign` FOREIGN KEY (`id_founder`) REFERENCES `tb_founder` (`id_founder`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
