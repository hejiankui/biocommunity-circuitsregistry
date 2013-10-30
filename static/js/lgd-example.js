// JavaScript Document
var circuit_lgd = {
  "codingframe": [
    {
	  "id": 1,
      "input": "1.without light. 2.red light",
      "output": "1. AHL+cI+LuxR 2, LuxR",
      "biobrick": [
        {
		  "id": 1,
          "name": "PompC",
          "dnaproperty": {
            "id": 4,
            "name": "promoter"
          },
          "function": "Red light repressed promoter",
          "order": 1
        },
		{
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 2
        },
		{
		  "id": 3,
          "name": "LuxI",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "expresses AHL",
          "order": 3
        },
	    {
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 4
        },
 	    {
		  "id": 4,
          "name": "cI",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "cI Transcriptional repressor",
          "order": 5
        }, 	  
	    {
		  "id": 5,
          "name": "B0015",
          "dnaproperty": {
            "id": 7,
            "name": "terminator coding"
          },
          "function": "code terminator ",
          "order": 6
        },
	    {
		  "id": 6,
          "name": "R0040",
          "dnaproperty": {
            "id": 4,
            "name": "promoter"
          },
          "function": "PLtet-O1 constitutive promoter in the absense of Tet repressor ",
          "order": 7
        },
        {
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 8
        },
		{
		  "id": 7,
          "name": "LuxR",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "Transcription factor luxR",
          "order": 9
        },
	    {
		  "id": 5,
          "name": "B0015",
          "dnaproperty": {
            "id": 7,
            "name": "terminator coding"
          },
          "function": "code terminator ",
          "order": 10
        },
	    {
		  "id": 8,
          "name": "Plux-lamda",
          "dnaproperty": {
            "id": 4,
            "name": "promoter"
          },
          "function": "LuxR::AHL activated & cI repressed promoter ",
          "order": 11
        },
		{
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 12
        },
		{
		  "id": 9,
          "name": "LacZ",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "express b-galactosidase",
          "order": 13
        },
		{
		  "id": 5,
          "name": "B0015",
          "dnaproperty": {
            "id": 7,
            "name": "terminator coding"
          },
          "function": "code terminator ",
          "order": 14
        }    
	  ]
	},
    {
	  "id": 2,
      "input": "",
      "output": "cph8 chimeric sensor kinase",
      "biobrick": [
        {
		  "id": 6,
          "name": "R0040",
          "dnaproperty": {
            "id": 4,
            "name": "promoter"
          },
          "function": "PLtet-O1 constitutive promoter in the absense of Tet repressor",
          "order": 1
        },
		{
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 2
        },
		{
		  "id": 10,
          "name": "cph8",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "express cph8 chimeric sensor kinase",
          "order": 3
        },
		{
		  "id": 5,
          "name": "B0015",
          "dnaproperty": {
            "id": 7,
            "name": "terminator coding"
          },
          "function": "code terminator ",
          "order": 4
        } 
      ]
	},
    {
	  "id": 3,
      "input": "",
      "output": "heme oxygenase 1+phycocyanobilin:ferredoxin oxidoreductase",
      "biobrick": [
        {
		  "id": 8,
          "name": "Plux-lamda",
          "dnaproperty": {
            "id": 4,
            "name": "promoter"
          },
          "function": "LuxR::AHL activated & cI repressed promoter ",
          "order": 1
        },
		{
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 2
        },
		{
		  "id": 11,
          "name": "ho1",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "express one precursor of chromophore phycocyanobilin",
          "order": 3
        },
		{
		  "id": 2,
          "name": "B0034",
          "dnaproperty": {
            "id": 5,
            "name": "RBS coding"
          },
          "function": "strong ribosome binding site",
          "order": 4
        },
		{
		  "id": 12,
          "name": "pcyA",
          "dnaproperty": {
            "id": 6,
            "name": "coding sequence"
          },
          "function": "express one precursor of chromophore phycocyanobilin",
          "order": 5
        },
		{
		  "id": 5,
          "name": "B0015",
          "dnaproperty": {
            "id": 7,
            "name": "terminator coding"
          },
          "function": "code terminator ",
          "order": 6
        }
      ]
	}
  ],
  "substance": [
    { "id": 15, "name": "AHL"},
	{ "id": 16, "name": "cI transcriptional repressor "},
	{ "id": 17, "name": "heme oxygenase 1"},
	{ "id": 18, "name": "phycocyanobilin:ferredoxin oxidoreductase"},
	{ "id": 19, "name": "LuxR transcription factor"},
	{ "id": 20, "name": "cph8 chimeric sensor kinase"},
	{ "id": 21, "name": "PCB"},
	{ "id": 22, "name": "red light"},
    { "id": 23, "name": "PCB/cph8 complex"},
    { "id": 24, "name": "AHL/LuxR complex"},
	{ "id": 25, "name": "beta-galactosidase"},
  ],
  "regulation": [
    {
      "type": 0,
      "relation" : {
        "id": 1
        },
      "source": {
        "type": "subtance",
        "id": 15
        },
      "target": {
        "type": "subtance",
        "id": 19
        },
      "expression": {
        "type": "subtance",
        "id": 24
        }
    },
	
	{
      "type": 0,
      "relation" : {
        "id": 1,
        },
      "source": {
        "type": "subtance",
        "id": 17
        },
      "target": {
        "type": "subtance",
        "id": 18
        },
      "expression": {
        "type": "subtance",
        "id": 21
        }
    },
	{
      "type": 0,
      "relation" : {
        "id": 1,
        },
      "source": {
        "type": "subtance",
        "id": 20
        },
      "target": {
        "type": "subtance",
        "id": 21
        },
      "expression": {
        "type": "subtance",
        "id": 23
        }
    },
	{
      "type": 0,
      "relation" : {
        "id": 2,
        },
      "source": {
        "type": "subtance",
        "id": 22
        },
      "target": {
        "type": "subtance",
        "id": 23
        },
      "expression": {
        "type": "subtance",
        "id": 0
        }
    },
	{
      "type": 0,
      "relation" : {
        "id": 2,
        },
      "source": {


        "type": "subtance",
        "id": 19
        },
      "target": {
        "type": "subtance",
        "id": 23
        },
      "expression": {
        "type": "subtance",
        "id": 0
        }
    },
	{
      "type": 1,
      "relation" : {
        "id": 3,
        },
      "source": {
        "type": "subtance",
        "id": 24
        },
      "target": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 11
        },
      "expression": {
        "type": "none",
        "id": 0
        }
    },
	{
      "type": 1,
      "relation" : {
        "id": 4,
        },
      "source": {
        "type": "subtance",
        "id": 16
        },
      "target": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 11
        },
      "expression": {
        "type": "none",
        "id": 0
        }
    },
	{
      "type": 1,
      "relation" : {
        "id": 5,
        },
      "source": {
        "type": "subtance",
        "id": 23
        },
      "target": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 1
        },
      "expression": {
        "type": "none",
        "id": 0
        }  
	}
    ,
    {
      "type": 2,
      "relation" : {
        "id": 0,
        },
      "source": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 3
        },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
        },
      "expression": {
        "type": "substance",
        "id": 15
		}
      },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
      },
      "source": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 5
      },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
      },
      "expression": {
        "type": "substance",
        "id": 16
	   }
	  },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
      },
      "source": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 9
      },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
      },
      "expression": {
        "type": "substance",
        "id": 19
	   }
      },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
       },
      "source": {
        "type": "biobrick",
        "codingframe_id": 1,
        "order": 13
       },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
       },
      "expression": {
        "type": "substance",
        "id": 25
	   }
      },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
       },
      "source": {
        "type": "biobrick",
        "codingframe_id": 2,
        "order": 3
       },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
       },
      "expression": {
        "type": "substance",
        "id": 20
	   }
      },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
       },
      "source": {
        "type": "biobrick",
        "codingframe_id": 3,
        "order": 3
       },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
       },
      "expression": {
        "type": "substance",
        "id": 17
	   }
      },
	  {
      "type": 2,
      "relation" : {
        "id": 0,
      },
      "source": {
        "type": "biobrick",
        "codingframe_id": 3,
        "order": 5
      },
      "target": {
        "type": "none",
        "codingframe_id": 0,
        "order": 0
      },
      "expression": {
        "type": "substance",
        "id": 18
      }
    }],
	"circuit":{
	  "id":1
	}
  
}