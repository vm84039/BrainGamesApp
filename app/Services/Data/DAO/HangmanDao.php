<?php
/*Vinson Martin CST-451
Brain Games App
HangmanDao
Stores Hangman Dictionary Word in Database */
namespace App\Services\Data\DAO;
use Illuminate\Support\Facades\DB;


class HangmanDao {
    public function selectWord(mixed $id) {
        $rows = DB::table('hangman')
            ->where ('id', '=', $id)->get();
        $row = $rows->first();
        return $row->word;
    }
    public function getAllWords(): \Illuminate\Support\Collection
    {
        return DB::table('hangman')
            ->select('id','word')
            ->orderBy('word', 'asc')
            ->get();
    }
    public function  insertWord(mixed $word): bool
    {
        $rows = DB::table('hangman')
            ->where ('word', '=', $word)->get();
        if ($rows->count() == 0) {
            DB::table('hangman')->insert([
                'word'=>$word,]);
            $added = true;
        }
        else{
            $added = false;
        }
        return $added;
    }
    public function deleteWord($id): void
    {
        DB::table('hangman')
            ->where('id', $id)
            ->delete();
    }

    public function wordList(): \Illuminate\Support\Collection
    {
        return collect([
                    "above",
                    "admit",
                    "adult",
                    "after",
                    "again",
                    "agent",
                    "agree",
                    "ahead",
                    "allow",
                    "alone",
                    "along",
                    "among",
                    "apply",
                    "argue",
                    "avoid",
                    "begin",
                    "black",
                    "blood",
                    "board",
                    "break",
                    "bring",
                    "build",
                    "carry",
                    "catch",
                    "cause",
                    "chair",
                    "check",
                    "child",
                    "civil",
                    "claim",
                    "class",
                    "clear",
                    "close",
                    "coach",
                    "color",
                    "could",
                    "court",
                    "cover",
                    "crime",
                    "death",
                    "dream",
                    "drive",
                    "early",
                    "eight",
                    "enjoy",
                    "enter",
                    "event",
                    "every",
                    "exist",
                    "field",
                    "fight",
                    "final",
                    "first",
                    "floor",
                    "focus",
                    "force",
                    "front",
                    "glass",
                    "great",
                    "green",
                    "group",
                    "guess",
                    "happy",
                    "heart",
                    "heavy",
                    "hotel",
                    "house",
                    "human",
                    "image",
                    "issue",
                    "large",
                    "later",
                    "laugh",
                    "learn",
                    "least",
                    "leave",
                    "legal",
                    "level",
                    "light",
                    "local",
                    "major",
                    "maybe",
                    "media",
                    "might",
                    "model",
                    "money",
                    "month",
                    "mouth",
                    "movie",
                    "music",
                    "never",
                    "night",
                    "north",
                    "occur",
                    "offer",
                    "often",
                    "order",
                    "other",
                    "owner",
                    "paper",
                    "party",
                    "peace",
                    "phone",
                    "piece",
                    "place",
                    "plant",
                    "point",
                    "power",
                    "price",
                    "prove",
                    "quite",
                    "radio",
                    "raise",
                    "range",
                    "reach",
                    "ready",
                    "right",
                    "scene",
                    "score",
                    "sense",
                    "serve",
                    "seven",
                    "shake",
                    "share",
                    "shoot",
                    "short",
                    "since",
                    "skill",
                    "small",
                    "smile",
                    "sound",
                    "south",
                    "space",
                    "speak",
                    "spend",
                    "sport",
                    "staff",
                    "stage",
                    "stand",
                    "start",
                    "state",
                    "still",
                    "stock",
                    "store",
                    "story",
                    "study",
                    "stuff",
                    "style",
                    "table",
                    "teach",
                    "thank",
                    "their",
                    "there",
                    "these",
                    "thing",
                    "think",
                    "third",
                    "those",
                    "three",
                    "throw",
                    "today",
                    "total",
                    "tough",
                    "trade",
                    "treat",
                    "trial",
                    "truth",
                    "under",
                    "until",
                    "value",
                    "visit",
                    "voice",
                    "watch",
                    "water",
                    "where",
                    "which",
                    "while",
                    "white",
                    "whole",
                    "whose",
                    "woman",
                    "world",
                    "worry",
                    "would",
                    "write",
                    "wrong",
                    "young",
                    "accept",
                    "across",
                    "action",
                    "affect",
                    "agency",
                    "almost",
                    "always",
                    "amount",
                    "animal",
                    "answer",
                    "anyone",
                    "appear",
                    "around",
                    "arrive",
                    "artist",
                    "assume",
                    "attack",
                    "author",
                    "become",
                    "before",
                    "behind",
                    "better",
                    "beyond",
                    "budget",
                    "camera",
                    "cancer",
                    "career",
                    "center",
                    "chance",
                    "change",
                    "charge",
                    "choice",
                    "choose",
                    "church",
                    "common",
                    "couple",
                    "course",
                    "create",
                    "debate",
                    "decade",
                    "decide",
                    "degree",
                    "design",
                    "detail",
                    "dinner",
                    "doctor",
                    "during",
                    "effect",
                    "effort",
                    "either",
                    "energy",
                    "enough",
                    "entire",
                    "expect",
                    "expert",
                    "factor",
                    "family",
                    "father",
                    "figure",
                    "finger",
                    "finish",
                    "follow",
                    "forget",
                    "former",
                    "friend",
                    "future",
                    "garden",
                    "ground",
                    "growth",
                    "happen",
                    "health",
                    "impact",
                    "indeed",
                    "inside",
                    "itself",
                    "lawyer",
                    "leader",
                    "letter",
                    "likely",
                    "listen",
                    "little",
                    "manage",
                    "market",
                    "matter",
                    "member",
                    "memory",
                    "method",
                    "middle",
                    "minute",
                    "modern",
                    "moment",
                    "mother",
                    "myself",
                    "nation",
                    "nature",
                    "nearly",
                    "notice",
                    "number",
                    "office",
                    "option",
                    "others",
                    "parent",
                    "people",
                    "period",
                    "person",
                    "player",
                    "police",
                    "policy",
                    "pretty",
                    "public",
                    "rather",
                    "really",
                    "reason",
                    "recent",
                    "record",
                    "reduce",
                    "region",
                    "relate",
                    "remain",
                    "remove",
                    "report",
                    "result",
                    "return",
                    "reveal",
                    "school",
                    "season",
                    "second",
                    "senior",
                    "series",
                    "sexual",
                    "should",
                    "simple",
                    "simply",
                    "single",
                    "sister",
                    "social",
                    "source",
                    "speech",
                    "spring",
                    "street",
                    "strong",
                    "suffer",
                    "summer",
                    "system",
                    "theory",
                    "though",
                    "threat",
                    "toward",
                    "travel",
                    "victim",
                    "weapon",
                    "weight",
                    "window",
                    "within",
                    "wonder",
                    "worker",
                    "writer",
                    "ability",
                    "account",
                    "address",
                    "against",
                    "already",
                    "another",
                    "article",
                    "because",
                    "believe",
                    "benefit",
                    "between",
                    "billion",
                    "brother",
                    "capital",
                    "central",
                    "century",
                    "certain",
                    "citizen",
                    "clearly",
                    "college",
                    "company",
                    "compare",
                    "concern",
                    "contain",
                    "control",
                    "country",
                    "culture",
                    "current",
                    "defense",
                    "despite",
                    "develop",
                    "discuss",
                    "disease",
                    "economy",
                    "evening",
                    "exactly",
                    "example",
                    "explain",
                    "federal",
                    "feeling",
                    "finally",
                    "foreign",
                    "forward",
                    "general",
                    "herself",
                    "himself",
                    "history",
                    "however",
                    "hundred",
                    "husband",
                    "imagine",
                    "improve",
                    "include",
                    "instead",
                    "involve",
                    "kitchen",
                    "machine",
                    "manager",
                    "measure",
                    "medical",
                    "meeting",
                    "mention",
                    "message",
                    "million",
                    "mission",
                    "morning",
                    "natural",
                    "network",
                    "nothing",
                    "officer",
                    "outside",
                    "partner",
                    "patient",
                    "pattern",
                    "perform",
                    "perhaps",
                    "picture",
                    "popular",
                    "prepare",
                    "present",
                    "prevent",
                    "private",
                    "problem",
                    "process",
                    "produce",
                    "product",
                    "program",
                    "project",
                    "protect",
                    "provide",
                    "purpose",
                    "quality",
                    "quickly",
                    "reality",
                    "realize",
                    "receive",
                    "reflect",
                    "require",
                    "respond",
                    "science",
                    "section",
                    "serious",
                    "service",
                    "several",
                    "similar",
                    "society",
                    "soldier",
                    "someone",
                    "special",
                    "station",
                    "student",
                    "subject",
                    "success",
                    "suggest",
                    "support",
                    "surface",
                    "teacher",
                    "thought",
                    "through",
                    "tonight",
                    "trouble",
                    "usually",
                    "various",
                    "western",
                    "whether",
                    "without",
                    "activity",
                    "actually",
                    "although",
                    "American",
                    "analysis",
                    "anything",
                    "approach",
                    "attorney",
                    "audience",
                    "behavior",
                    "building",
                    "business",
                    "campaign",
                    "computer",
                    "Congress",
                    "consider",
                    "consumer",
                    "continue",
                    "cultural",
                    "customer",
                    "daughter",
                    "decision",
                    "Democrat",
                    "describe",
                    "director",
                    "discover",
                    "economic",
                    "election",
                    "employee",
                    "everyone",
                    "evidence",
                    "hospital",
                    "identify",
                    "increase",
                    "indicate",
                    "industry",
                    "interest",
                    "language",
                    "magazine",
                    "maintain",
                    "majority",
                    "marriage",
                    "material",
                    "military",
                    "movement",
                    "national",
                    "official",
                    "painting",
                    "personal",
                    "physical",
                    "politics",
                    "position",
                    "positive",
                    "possible",
                    "practice",
                    "pressure",
                    "probably",
                    "property",
                    "question",
                    "recently",
                    "remember",
                    "research",
                    "resource",
                    "response",
                    "security",
                    "shoulder",
                    "somebody",
                    "southern",
                    "specific",
                    "standard",
                    "strategy",
                    "suddenly",
                    "thousand",
                    "together",
                    "training",
                    "violence",
                    "whatever",
                    "yourself",
                    "according",
                    "agreement",
                    "attention",
                    "authority",
                    "available",
                    "beautiful",
                    "candidate",
                    "certainly",
                    "challenge",
                    "character",
                    "community",
                    "condition",
                    "determine",
                    "different",
                    "difficult",
                    "direction",
                    "education",
                    "establish",
                    "everybody",
                    "executive",
                    "financial",
                    "important",
                    "including",
                    "interview",
                    "knowledge",
                    "necessary",
                    "newspaper",
                    "operation",
                    "political",
                    "president",
                    "professor",
                    "recognize",
                    "religious",
                    "represent",
                    "scientist",
                    "situation",
                    "something",
                    "sometimes",
                    "statement",
                    "structure",
                    "treatment",
                    "collection",
                    "commercial",
                    "conference",
                    "democratic",
                    "difference",
                    "discussion",
                    "especially",
                    "everything",
                    "experience",
                    "generation",
                    "government",
                    "individual",
                    "investment",
                    "management",
                    "particular",
                    "population",
                    "production",
                    "Republican",
                    "successful",
                    "technology",
                    "television",
                    "themselves",
                    "throughout",
                    "understand"]);
    }
}