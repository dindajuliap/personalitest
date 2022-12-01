-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 10:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalitest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_table`
--

CREATE TABLE `answer_table` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_choice` varchar(1) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_table`
--

INSERT INTO `answer_table` (`answer_id`, `question_id`, `answer_choice`, `answer`) VALUES
(1, 1, 'A', 'Optimistic'),
(2, 1, 'B', 'More quiet'),
(3, 1, 'C', 'Have a deep feeling'),
(4, 1, 'D', 'Emotional'),
(5, 2, 'A', 'Goal oriented'),
(6, 2, 'B', 'Pessimistic'),
(7, 2, 'C', 'Sensitive'),
(8, 2, 'D', 'Hard to focus on self-change'),
(9, 3, 'A', 'High self-convidence'),
(10, 3, 'B', 'Prefer to be alone and away from the crowd'),
(11, 3, 'C', 'High affection and easily compassionate'),
(12, 3, 'D', 'Focus on yourself'),
(13, 4, 'A', 'Active in organizations or associations'),
(14, 4, 'B', 'Have a good control and not aggressive'),
(15, 4, 'C', 'Easily offended'),
(16, 4, 'D', 'Do activities complicated/impractically'),
(17, 5, 'A', 'Domineering and controlling'),
(18, 5, 'B', 'Easily confused and doubtful'),
(19, 5, 'C', 'Reliable friend'),
(20, 5, 'D', 'Easy to get scared'),
(21, 6, 'A', 'Aggressive'),
(22, 6, 'B', 'Slow and often feel lazy'),
(23, 6, 'C', 'Often self-sacrifice'),
(24, 6, 'D', 'Irregular'),
(25, 7, 'A', 'High leadership spirit'),
(26, 7, 'B', 'Easy to get along'),
(27, 7, 'C', 'Doesn\'t like appearing in public'),
(28, 7, 'D', 'Has a weak desire'),
(29, 8, 'A', 'Stick with one thing until it\'s done'),
(30, 8, 'B', 'Calm and relaxed'),
(31, 8, 'C', 'Suspicious'),
(32, 8, 'D', 'Talk too much'),
(33, 9, 'A', 'Have a strong desire'),
(34, 9, 'B', 'Work and think efficiently'),
(35, 9, 'C', 'Frequent self-reflection'),
(36, 9, 'D', 'Nice personality'),
(37, 10, 'A', 'Has a high temperament'),
(38, 10, 'B', 'Reliable'),
(39, 10, 'C', 'Perfectionist'),
(40, 10, 'D', 'Easy to make friends with anyone'),
(41, 11, 'A', 'Not sensitive to surroundings'),
(42, 11, 'B', 'Good at joking and love humor'),
(43, 11, 'C', 'Often becomes an outlet for hatred'),
(44, 11, 'D', 'Active and tireless'),
(45, 12, 'A', 'Hard to sympathize with other people\'s feelings'),
(46, 12, 'B', 'Often teases or jokes'),
(47, 12, 'C', 'Creative'),
(48, 12, 'D', 'Difficulty concentrating or focusing on one thing'),
(49, 13, 'A', 'Persevere and have a clear desire'),
(50, 13, 'B', 'Think only of yourself'),
(51, 13, 'C', 'Moods change easily'),
(52, 13, 'D', 'Think far ahead'),
(53, 14, 'A', 'Firm and not easily confused'),
(54, 14, 'B', 'Obey orders or solicitous'),
(55, 14, 'C', 'Often in precarious situations'),
(56, 14, 'D', 'Don\'t like to give in and selfish'),
(57, 15, 'A', 'Sarcastic'),
(58, 15, 'B', 'Stingy'),
(59, 15, 'C', 'Difficult to make a choice'),
(60, 15, 'D', 'Impulsivity or act according to conscience'),
(61, 16, 'A', 'Think practically and easily implement the results'),
(62, 16, 'B', 'Stubborn'),
(63, 16, 'C', 'Pessimistic'),
(64, 16, 'D', 'Difficult to meet'),
(65, 17, 'A', 'Sometimes friendly but sometimes fierce'),
(66, 17, 'B', 'Would rather be a spectator than a performer'),
(67, 17, 'C', 'Idealist'),
(68, 17, 'D', 'Optimistic'),
(69, 18, 'A', 'Able to meet own needs'),
(70, 18, 'B', 'Able to work under pressure'),
(71, 18, 'C', 'Often withdraws from crowds'),
(72, 18, 'D', 'Friendly and likes to talk to others'),
(73, 19, 'A', 'Likes to argue without caring about the situation at hand'),
(74, 19, 'B', 'Not too focused on goals and don\'t like people like that'),
(75, 19, 'C', 'Often afraid that other people don\'t feel comfortable with you'),
(76, 19, 'D', 'Easily disappointed but easy to forget the disappointment'),
(77, 20, 'A', 'Hard to believe that someone else will do their best'),
(78, 20, 'B', 'Able to be a good listener'),
(79, 20, 'C', 'Trust and loyalty to a person or work'),
(80, 20, 'D', 'Strong personality and always passionate'),
(81, 21, 'A', 'I prefer the atmosphere of parties and gatherings'),
(82, 21, 'B', 'I prefer hanging out with close friends only'),
(83, 22, 'A', 'I feel more excited in crowded places'),
(84, 22, 'B', 'I feel tired quickly in crowded places'),
(85, 23, 'A', 'I like to tell stories and tell jokes in front of family or friends'),
(86, 23, 'B', 'I prefer to hear other people tell stories'),
(87, 24, 'A', 'It doesn\'t matter if I have to initiate and respond to conversations with strangers'),
(88, 24, 'B', 'I prefer to avoid talking to strangers'),
(89, 25, 'A', 'I do it right away without thinking if I want something'),
(90, 25, 'B', 'I have to consider the pros and cons that will be faced if I want something'),
(91, 26, 'A', 'I don\'t think much about preparation and any plan of doing anything'),
(92, 26, 'B', 'Preparation and planning are absolute things to do something for me'),
(93, 27, 'A', 'I will definitely take part in a karaoke competition if I have good singing skills'),
(94, 27, 'B', 'I would not enter a karaoke contest even if I had the singing ability'),
(95, 28, 'A', 'I am able to express opinions in public'),
(96, 28, 'B', 'Expressing opinions in public is a risky action for me'),
(97, 29, 'A', 'I don\'t mind if someone disagrees with my opinion'),
(98, 29, 'B', 'I feel uncomfortable having to confront someone'),
(99, 30, 'A', 'I feel happy doing a job together'),
(100, 30, 'B', 'I prefer to complete work individually'),
(101, 31, 'A', 'Face and appearance'),
(102, 31, 'B', 'Speaking manner'),
(103, 31, 'C', 'Your feeling when you meet that person'),
(104, 32, 'A', 'Her/Him face'),
(105, 32, 'B', 'Her/Him name'),
(106, 32, 'C', 'Her/Him behavior'),
(107, 33, 'A', 'The room\'s layout'),
(108, 33, 'B', 'The sound in the room'),
(109, 33, 'C', 'The situation of the room'),
(110, 34, 'A', 'The teacher gives you books with pictures or maps'),
(111, 34, 'B', 'The teacher gives you material for discussion and you exchange mind with other friends'),
(112, 34, 'C', 'The teacher gives orders to write the material accompanied using props'),
(113, 35, 'A', 'Give pictures or photos to the students'),
(114, 35, 'B', 'Give an explanation orally'),
(115, 35, 'C', 'Give explanations with gestures'),
(116, 36, 'A', 'Infographic-filled picture books'),
(117, 36, 'B', 'Books containing factual historical information'),
(118, 36, 'C', 'Books that discuss about feelings and emotions or popular psychology books'),
(119, 37, 'A', 'Read novels and magazines'),
(120, 37, 'B', 'Listening to music'),
(121, 37, 'C', 'Draw and play puzzles'),
(122, 38, 'A', 'Learn in a comfortable atmosphere even though there is sound'),
(123, 38, 'B', 'Study accompanied by silence'),
(124, 38, 'C', 'Study with a large room so you can practice and understand what is learned'),
(125, 39, 'A', 'Look right in her/him face or eyes and you will feel appreciated if you do the same'),
(126, 39, 'B', 'Take a glance and focus more on listening to the story'),
(127, 39, 'C', 'Look occasionally to reassure yourself about the ongoing conversation'),
(128, 40, 'A', 'You prefer to observe whatever you see along the way. Especially something you\'ve never been through before'),
(129, 40, 'B', 'If you are in a quiet situation then you will make a sound so that the situation becomes a little crowded'),
(130, 40, 'C', 'You will dance or move your body when you feel a certain euphoria'),
(131, 41, 'A', 'Read the instructions'),
(132, 41, 'B', 'Waiting for instructions from others'),
(133, 41, 'C', 'Get straight to practice'),
(134, 42, 'A', 'Just look at the word'),
(135, 42, 'B', 'Listen to the sound of how the word is pronounced'),
(136, 42, 'C', 'Write the word'),
(137, 43, 'A', 'Read silently'),
(138, 43, 'B', 'Read aloud'),
(139, 43, 'C', 'Read with supportive gestures'),
(140, 44, 'A', 'Shut up and choose to go'),
(141, 44, 'B', 'Angry and issued curses right there'),
(142, 44, 'C', 'Don\'t hesitate to pick up things and then slam them'),
(143, 45, 'A', 'Write the message'),
(144, 45, 'B', 'Just listen'),
(145, 45, 'C', 'Don\'t understand the contents because they do not meet directly with the interlocutor'),
(146, 46, 'A', 'Messy room'),
(147, 46, 'B', 'Too much noise'),
(148, 46, 'C', 'People passing by around you'),
(149, 47, 'A', 'Guess the picture'),
(150, 47, 'B', 'Word scramble'),
(151, 47, 'C', 'Pantomime'),
(152, 48, 'A', 'Describe the path to the place'),
(153, 48, 'B', 'Explain verbally'),
(154, 48, 'C', 'Deliver directly to the destination');

-- --------------------------------------------------------

--
-- Table structure for table `profile_picture_table`
--

CREATE TABLE `profile_picture_table` (
  `profile_picture_id` int(11) NOT NULL,
  `profile_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_picture_table`
--

INSERT INTO `profile_picture_table` (`profile_picture_id`, `profile_picture`) VALUES
(1, 'avatar-1.png'),
(2, 'avatar-2.png'),
(3, 'avatar-3.png'),
(4, 'avatar-4.png'),
(5, 'avatar-5.png'),
(6, 'avatar-6.png'),
(7, 'avatar-7.png'),
(8, 'avatar-8.png');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`question_id`, `question_type_id`, `question`) VALUES
(1, 1, 'Which one describes you best?'),
(2, 1, 'Which one describes you best?'),
(3, 1, 'Which one describes you best?'),
(4, 1, 'Which one describes you best?'),
(5, 1, 'Which one describes you best?'),
(6, 1, 'Which one describes you best?'),
(7, 1, 'Which one describes you best?'),
(8, 1, 'Which one describes you best?'),
(9, 1, 'Which one describes you best?'),
(10, 1, 'Which one describes you best?'),
(11, 1, 'Which one describes you best?'),
(12, 1, 'Which one describes you best?'),
(13, 1, 'Which one describes you best?'),
(14, 1, 'Which one describes you best?'),
(15, 1, 'Which one describes you best?'),
(16, 1, 'Which one describes you best?'),
(17, 1, 'Which one describes you best?'),
(18, 1, 'Which one describes you best?'),
(19, 1, 'Which one describes you best?'),
(20, 1, 'Which one describes you best?'),
(21, 2, 'Which one describes you best?'),
(22, 2, 'Which one describes you best?'),
(23, 2, 'Which one describes you best?'),
(24, 2, 'Which one describes you best?'),
(25, 2, 'Which one describes you best?'),
(26, 2, 'Which one describes you best?'),
(27, 2, 'Which one describes you best?'),
(28, 2, 'Which one describes you best?'),
(29, 2, 'Which one describes you best?'),
(30, 2, 'Which one describes you best?'),
(31, 3, 'When you meet strangers or meet a new people, what\'s the first thing that you notice?'),
(32, 3, 'After a long time of not seeing your brother/sister or friends, what\'s the first thing you remember about them?'),
(33, 3, 'If you had to enter a room you\'ve never been in before, what would you notice first?'),
(34, 3, 'Which method is the most fun for you?'),
(35, 3, 'If you become a trainer, then what will you do?'),
(36, 3, 'Which type of book is your favorite?'),
(37, 3, 'If you have free time, what activities will you do?'),
(38, 3, 'You are given the opportunity to study with the best atmosphere, which of the following choices do you like the most?'),
(39, 3, 'When you\'re talking to someone else, where do you look?'),
(40, 3, 'Which one describes you best?'),
(41, 3, 'If you wanted to make or try something, then what would you do?'),
(42, 3, 'If you were given the task of remembering words that you never know before, what would you do?'),
(43, 3, 'Which do you think is the most effective way to memorize?'),
(44, 3, 'What will you do if you encounter a situation that doesn\'t meet your expectations?'),
(45, 3, 'This morning, you got a call from a relative and had to convey the message to Mother. What are you going to do so you don\'t forget?'),
(46, 3, 'Which do you find more annoying?'),
(47, 3, 'Which game is the most interesting?'),
(48, 3, 'When someone asks you for directions, what will you do?');

-- --------------------------------------------------------

--
-- Table structure for table `question_type_table`
--

CREATE TABLE `question_type_table` (
  `question_type_id` int(11) NOT NULL,
  `question_type` text NOT NULL,
  `question_type_description` varchar(200) NOT NULL,
  `question_type_cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_type_table`
--

INSERT INTO `question_type_table` (`question_type_id`, `question_type`, `question_type_description`, `question_type_cover`) VALUES
(1, 'Choleric, Phlegmatic, Melancholic, and Sanguine', '<p>This test divides human character into four different temperaments, which are the basis of the color of human character which acts as a representation of the individual\'s life.</p>', 'type-1.png'),
(2, 'Extroverted, Introverted, and Ambiverted', '<p>This test divides human character into three different characters, which are divided based on how an individual interacts and reacts to the environment around.</p>', 'type-2.png'),
(3, 'Visual, Auditory, and Kinesthetic', '<p>This test divides human character into three parts, which are divided based on the appropriate learning style for an individual.</p>', 'type-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `result_description_table`
--

CREATE TABLE `result_description_table` (
  `result_description_id` int(11) NOT NULL,
  `result_description_title` text NOT NULL,
  `result_description` text NOT NULL,
  `result_description_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_description_table`
--

INSERT INTO `result_description_table` (`result_description_id`, `result_description_title`, `result_description`, `result_description_photo`) VALUES
(1, 'Choleric', '<p><b>Characteristics</b></p><ul><li>Have a good leadership spirit</li><li>Has greater strength than those peoples around</li><li>Want to look qualified especially in the field of education</li><li>Always wanting to be right</li><li>Want to be respected</li><li>Always trying to hide the fear</li><li>Pleasure oriented</li><li>Like challenges</li></ul><br><p><b>Advantages</b></p><ul><li>Independent</li><li>Have clear goals</li><li>Know how to solve problems</li><li>Can be a good organizer and executor</li><li>Visionary</li><li>Have high expectations of others</li></ul><br><p><b>Disadvantages</b></p><ul><li>Thinks he is perfect</li><li>No morals</li><li>Hard to forgive someone</li><li>Do not want to give in even though wrong</li><li>Wrong things are often brought up</li><li>Cruel</li><li>Want loyalty</li></ul>', 'choleric.png'),
(2, 'Phlegmatic', '<p><b>Characteristics</b></p><ul><li>Calm personality and likes serenity</li><li>Want to feel the pleasure that comes from yourself</li><li>Always want to be understood</li><li>Want to be respected</li><li>Often feel insecure and do not hesitate to show it to others</li><li>Feel happy when others are happy</li><li>Have a desire to be protected</li><li>Want pleasure for yourself</li></ul><br><p><b>Advantages</b></p><ul><li>Can be a good peacemaker</li><li>More silence</li><li>Do not spread the word unless asked</li><li>Efficient</li><li>A good listener</li><li>Observe the situation in silence</li><li>Able to control anger well</li><li>Stressful situations can be resolved easily because they are able to reason logically</li><li>Have good ability in collaborating with others</li></ul><br><p><b>Disadvantages</b></p><ul><li>Sometimes doing something without a specific purpose</li><li>Can be a person who only cares about himself</li><li>It\'s easy to get scared</li><li>Often feel worried</li><li>Only willing to work from behind the scenes</li><li>Often put off important things</li><li>Want to solve the problem without thinking about other aspects</li><li>Don\'t want to show emotion</li><li>Often feel unenthusiastic</li></ul>', 'phlegmatic.png'),
(3, 'Melancholic', '<p><b>Characteristics</b></p><ul><li>Want to be close to the environment</li><li>Want to look good from a moral standpoint</li><li>Want to always be understood</li><li>Want to be accepted as is</li><li>Often feel insecure and do not hesitate to show it to others</li><li>Want to please others</li><li>Strive to be an independent individual</li><li>Want to be protected</li></ul><br><p><b>Advantages</b></p><ul><li>Talented</li><li>Often self-sacrifice</li><li>Don\'t hesitate to help others</li><li>Prefer to work from behind the scenes</li><li>Take pleasure in the success of others</li><li>Alone if you feel you don\'t fit in with your surroundings</li><li>Full of loyalty</li><li>Devoted to others and their work</li></ul><br><p><b>Disadvantages</b></p><ul><li>Do not like openly praised</li><li>Feelings change easily</li><li>Criticize openly</li><li>Full of negative thoughts</li><li>I want to be accepted no matter what</li><li>Does not show affection overtly</li><li>Deviate hatred for a long time</li><li>Often feel insecure in social situations</li><li>Easy to suspect</li></ul>', 'melancholic.png'),
(4, 'Sanguine', '<p><b>Characteristics</b></p><ul><li>Nice personality</li><li>Want to look good in the eyes of the people around</li><li>Want to be famous</li><li>It\'s nice to be praised</li><li>Feel the need to be accepted no matter what the circumstances</li><li>Doesn\'t show his fear</li><li>Want attention</li><li>Freedom is the goal</li><li>Likes to be funny</li></ul><br><p><b>Advantages</b></p><ul><li>Easy to liven up</li><li>Can please others</li><li>Be friendly to anyone</li><li>Can be a good listener and give a good response</li><li>Warm personality and easy to get close to</li><li>Easy to make friends with new people</li><li>Easily moved</li><li>Don\'t hesitate to show your disappointment</li><li>Not easily offended</li><li>Creative</li></ul><br><p><b>Disadvantages</b></p><ul><li>Hard to rely on in certain situations</li><li>He doesn\'t have many close friends</li><li>Easy to forget</li><li>Sometimes undisciplined</li><li>Unstable emotion</li><li>At certain times it\'s easy to lose focus</li><li>Selfish</li><li>exaggerating</li><li>Often forces through his words</li><li>Deciding something based on feelings</li><li>Doesn\'t like being alone</li></ul>', 'sanguine.png'),
(5, 'Extroverted', '<p><b>Characteristics</b></p><ul><li>Good at getting along and put yourself in a social environment</li><li>Interacting with others is an energy-gathering activity</li><li>Confident and good at breaking the ice</li><li>Not afraid in dealing with conflicts because they know how to convey the solution</li><li>Full of energy especially in a crowded place</li><li>Prefer to tell stories because they are the center of attention</li><li>Like spontaneous activity and easier to interact with the outside world</li><li>Does not like to dwell on small things for a long time</li><li>When doing something prioritize results</li><li>Happy to work in groups</li><li>Not being able to control the conversation</li><li>Sometimes exaggerating something just to get attention</li></ul><p><b>Suitable Jobs</b></p><ul><li>Lawyer</li><li>Reporter</li><li>Sales person</li><li>Master of ceremonies (MC)</li><li>Tour guide</li><li>Event organizer</li><li>Customer service</li><li>Trainer</li><li>Musician</li><li>Actor</li><li>News anchor</li><li>Radio announcer</li></ul>', 'extroverted.png'),
(6, 'Introverted', '<p><b>Characteristics</b></p><ul><li>Tends to prefer calm conditions</li><li>Enjoys solitude and solitary activities including energizing activities</li><li>Always thinking about things that have been done or will be done</li><li>It\'s not easy to feel comfortable in a new environment</li><li>Activities that can be done alone are his pleasure</li><li>Easy to concentrate</li><li>Not really like small talk and just small talk</li><li>Crowds are one of the most avoided things</li><li>Go out with just one or two friends</li><li>Always pay attention to your surroundings even if you don\'t interact directly</li><li>A good listener</li><li>Everything he conveys to others is the product of his long-term thinking</li><li>Usually loyal to the things he likes</li><li>It\'s not easy to get carried away by negative currents</li><li>Has unpredictable properties</li><li>Creative and have a strong memory</li></ul><p><b>Suitable Jobs</b></p><ul><li>Translator</li><li>Writer</li><li>Song writer</li><li>Artist</li><li>Editor</li><li>Graphic designer or video expert</li><li>Technician</li><li>Researcher</li><li>Accountant</li><li>Pilot</li></ul>', 'introverted.png'),
(7, 'Ambiverted', '<p><b>Characteristics</b></p><ul><li>Awkward when meeting new people</li><li>Easily recognizes the personality of others</li><li>It\'s okay to be in a crowded place but not take the initiative to interact with others</li><li>Can adapt to the environment</li><li>Likes crowds but will be alone if you feel tired</li><li>Can adjust when talking to others</li><li>The mood changes depending on the interlocutor</li><li>Can do individual and group assignments well</li><li>Often confused when faced with two situations</li><li>There are times when he is quiet and there are times when he is loud</li><li>It\'s easy to get carried away with the crowd</li></ul><p><b>Suitable Jobs</b></p><ul><li>Businessman</li><li>Journalist</li><li>Teacher</li><li>Lawyer</li><li>Event organizer</li><li>Company manager</li><li>Marketing</li><li>Sales person</li><li>Psychologist</li><li>Human Resources Department (HRD)</li></ul>', 'ambiverted.png'),
(8, 'Visual', '<p><b>Characteristics</b></p><ul><li>Neat and orderly</li><li>Remembering with visual associations</li><li>Usually not bothered by noise</li><li>Fast and assiduous reader</li><li>Somewhat difficult to remember verbal instructions unless written down</li><li>Concerned about appearance</li><li>He is a good speller and can see words that are actually only in his mind</li><li>Speak fast</li><li>Good long term planner and organizer</li><li>Better remember what you see</li><li>Prefer to read rather than be read to</li><li>Requires an overarching view and purpose</li><li>Often forget about the promise of conveying messages to others</li><li>Often only answer with yes or no when asked a question</li><li>Prefer demonstrations rather than speeches</li><li>Prefer art over music</li><li>Often knows what to say but doesn\'t know what to say</li><li>Sometimes loses concentration when paying attention to something</li></ul>', 'visual.png'),
(9, 'Auditory', '<p><b>Characteristics</b></p><ul><li>Talk to yourself often</li><li>Easily distracted by noise</li><li>Speak in a patterned rhythm</li><li>Including a reliable speaker</li><li>Prefer music over art</li><li>Enjoys reading aloud and hearing other people\'s voices</li><li>Can repeat and imitate notes</li><li>Weak in writing but great in telling stories</li><li>Move their lips and say the words in the book while reading</li><li>Likes to talk and explain things at length</li><li>Trouble with jobs that involve visualization</li><li>It\'s better to spell out loud than to write it down</li><li>Learn faster by listening and remembering things discussed than what is seen</li></ul>', 'auditory.png'),
(10, 'Kinesthetic', '<p><b>Characteristics</b></p><ul><li>The tempo of speech is slow</li><li>Responds to attention physically</li><li>Learn through practice and manipulation</li><li>Want to do everything with practice</li><li>Likes physically busy games</li><li>Memorize by walking and looking</li><li>Use your finger as a pointer while reading</li><li>Many use gestures to make it easier to remember</li><li>Very active and can not stay still for a long time</li><li>Can\'t remember geography or specific places</li><li>Physically touching to get another person\'s attention</li><li>Physically oriented and active</li><li>Use words that contain action</li><li>Likes plot-oriented books</li><li>Use body movements while reading</li></ul>', 'kinesthetic.png'),
(12, 'Introverted', '<p><b>Characteristics</b></p><ul><li>Tends to prefer calm conditions</li><li>Enjoys solitude and solitary activities including energizing activities</li><li>Always thinking about things that have been done or will be done</li><li>It\'s not easy to feel comfortable in a new environment</li><li>Activities that can be done alone are his pleasure</li><li>Easy to concentrate</li><li>Not really like small talk and just small talk</li><li>Crowds are one of the most avoided things</li><li>Go out with just one or two friends</li><li>Always pay attention to your surroundings even if you don\'t interact directly</li><li>A good listener</li><li>Everything he conveys to others is the product of his long-term thinking</li><li>Usually loyal to the things he likes</li><li>It\'s not easy to get carried away by negative currents</li><li>Has unpredictable properties</li><li>Creative and have a strong memory</li></ul><br><p><b>Suitable Jobs</b></p><ul><li>Translator</li><li>Writer</li><li>Song writer</li><li>Artist</li><li>Editor</li><li>Graphic designer or video expert</li><li>Technician</li><li>Researcher</li><li>Accountant</li><li>Pilot</li></ul>', 'introverted.png');

-- --------------------------------------------------------

--
-- Table structure for table `result_table`
--

CREATE TABLE `result_table` (
  `result_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `result_description_id` int(11) NOT NULL,
  `most_selected` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_table`
--

INSERT INTO `result_table` (`result_id`, `question_type_id`, `result_description_id`, `most_selected`) VALUES
(1, 1, 1, 'A'),
(2, 1, 2, 'B'),
(3, 1, 3, 'C'),
(4, 1, 4, 'D'),
(5, 2, 5, 'A'),
(6, 2, 6, 'B'),
(7, 2, 7, 'C'),
(8, 3, 8, 'A'),
(9, 3, 9, 'B'),
(10, 3, 10, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `test_result_table`
--

CREATE TABLE `test_result_table` (
  `test_result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `result_most_selected` varchar(1) NOT NULL,
  `test_result_date` datetime NOT NULL,
  `test_result_status` enum('Available','Not available') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE `test_table` (
  `test_id` int(11) NOT NULL,
  `test_result_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `token_table`
--

CREATE TABLE `token_table` (
  `token_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `token` varchar(15) NOT NULL,
  `token_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_fullname` varchar(200) NOT NULL,
  `user_phone` varchar(13) DEFAULT NULL,
  `user_bio` varchar(150) DEFAULT NULL,
  `user_photo` text NOT NULL,
  `user_status` enum('Active','Non-Active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_answer` (`question_id`);

--
-- Indexes for table `profile_picture_table`
--
ALTER TABLE `profile_picture_table`
  ADD PRIMARY KEY (`profile_picture_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_type_question` (`question_type_id`);

--
-- Indexes for table `question_type_table`
--
ALTER TABLE `question_type_table`
  ADD PRIMARY KEY (`question_type_id`);

--
-- Indexes for table `result_description_table`
--
ALTER TABLE `result_description_table`
  ADD PRIMARY KEY (`result_description_id`);

--
-- Indexes for table `result_table`
--
ALTER TABLE `result_table`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `result_description_result` (`result_description_id`),
  ADD KEY `question_type_result` (`question_type_id`);

--
-- Indexes for table `test_result_table`
--
ALTER TABLE `test_result_table`
  ADD PRIMARY KEY (`test_result_id`),
  ADD KEY `user_test_result` (`user_id`),
  ADD KEY `question_type_test_result` (`question_type_id`);

--
-- Indexes for table `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `question_test` (`question_id`),
  ADD KEY `answer_test` (`answer_id`),
  ADD KEY `test_result_test` (`test_result_id`);

--
-- Indexes for table `token_table`
--
ALTER TABLE `token_table`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_table`
--
ALTER TABLE `answer_table`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `profile_picture_table`
--
ALTER TABLE `profile_picture_table`
  MODIFY `profile_picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `question_type_table`
--
ALTER TABLE `question_type_table`
  MODIFY `question_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result_description_table`
--
ALTER TABLE `result_description_table`
  MODIFY `result_description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `result_table`
--
ALTER TABLE `result_table`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test_result_table`
--
ALTER TABLE `test_result_table`
  MODIFY `test_result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_table`
--
ALTER TABLE `test_table`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `token_table`
--
ALTER TABLE `token_table`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD CONSTRAINT `question_answer` FOREIGN KEY (`question_id`) REFERENCES `question_table` (`question_id`);

--
-- Constraints for table `question_table`
--
ALTER TABLE `question_table`
  ADD CONSTRAINT `question_type_question` FOREIGN KEY (`question_type_id`) REFERENCES `question_type_table` (`question_type_id`);

--
-- Constraints for table `result_table`
--
ALTER TABLE `result_table`
  ADD CONSTRAINT `question_result` FOREIGN KEY (`question_type_id`) REFERENCES `question_table` (`question_id`),
  ADD CONSTRAINT `question_type_result` FOREIGN KEY (`question_type_id`) REFERENCES `question_type_table` (`question_type_id`),
  ADD CONSTRAINT `result_description_result` FOREIGN KEY (`result_description_id`) REFERENCES `result_description_table` (`result_description_id`);

--
-- Constraints for table `test_result_table`
--
ALTER TABLE `test_result_table`
  ADD CONSTRAINT `question_type_test_result` FOREIGN KEY (`question_type_id`) REFERENCES `question_type_table` (`question_type_id`),
  ADD CONSTRAINT `user_test_result` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `test_table`
--
ALTER TABLE `test_table`
  ADD CONSTRAINT `answer_test` FOREIGN KEY (`answer_id`) REFERENCES `answer_table` (`answer_id`),
  ADD CONSTRAINT `question_test` FOREIGN KEY (`question_id`) REFERENCES `question_table` (`question_id`),
  ADD CONSTRAINT `test_result_test` FOREIGN KEY (`test_result_id`) REFERENCES `test_result_table` (`test_result_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
