package org.clothocad.tool.TTECONCLOTHO;

import javax.swing.*;

import java.awt.*;
import java.awt.event.*;
import javax.swing.event.*;


public class TabbedPaneDemo<JTextfield> extends JFrame{
	  private String[] Names = {
	    "Information", "Protocol", "Comment", "Circuit", "Close"};
	  private Color[] colors = {
	    Color.RED, Color.BLUE, Color.GREEN, Color.cyan,};
	    private JTabbedPane tabs = new JTabbedPane();
	    int xOld = 0;
	    int yOld = 0;
	    Point loc = null;
	    Point tmp = null;
	    boolean isDragged = false;
	    
	  public TabbedPaneDemo() {
	   
		  this.setTitle(Data.Ecoid[Data.num]);
	    
		this.setUndecorated(true);
		JPanel Information=new JPanel();
		Information.setLayout(null);
	    tabs.addTab(Names[0],Information);
	    tabs.setBackground(Color.yellow);
	    Information.setBackground(Color.white);
	    
	    ImageIcon im8 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/bg5.jpg");
	    im8.setImage(im8.getImage().getScaledInstance(800, 118,Image.SCALE_DEFAULT));
        JLabel label = new JLabel(im8);
        JLabel label2 = new JLabel(im8);
	    label.setBounds(0, 480, 800, 118); 
	    label2.setBounds(0, 480, 800, 118);   

	    
	    
	    ImageIcon im1 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/Project Name.png");
//	    im1.setImage(im1.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    JLabel PN = new JLabel(im1); 
	    
	    PN.setBounds(35, 30, 200, 50);
	    Information.add(PN);
	    JTextArea pn = new JTextArea(Data.ProjectName[Data.num]);
	    pn.setSize(500, 50);
	    pn.setFont(new Font("",Font.ITALIC,15));
	    Information.add(pn);
	    pn.setLineWrap(true);
	    pn.setBounds(250,70,300,30);
	    
	    
	    ImageIcon im2 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/Project ID.png");
	    im2.setImage(im2.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    
	    JLabel PI = new JLabel(im2); 
	    PI.setSize(200, 50);
	    Information.add(PI);
	    PI.setBounds(35, 140, 200, 50);
	    

	    JTextArea pi = new JTextArea(Data.Ecoid[Data.num]);
	    pi.setFont(new Font("",Font.ITALIC,15));
	    Information.add(pi);
	    pi.setBounds(250, 190,200,50);
	    
	    
	    ImageIcon im3 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/Description.jpg");
	    im3.setImage(im3.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    JLabel DS = new JLabel(im3);
	    DS.setBounds(35, 260, 200, 50);
	    Information.add(DS);
	    JTextArea jt1 = new JTextArea();
	    jt1.setLineWrap(true);
	    String value = "  "+Data.Description[Data.num];
	    jt1.setText("" + value);
	    jt1.setWrapStyleWord(true);
	    JScrollPane js = new JScrollPane(jt1);
	    jt1.setFont(new Font("",Font.ITALIC,17));
	    jt1.setBorder(BorderFactory.createEmptyBorder());
	    Information.add(js);
	    js.setBorder(BorderFactory.createEmptyBorder());
	    js.setBounds(250, 310, 500, 150);
	    Information.add(label);
	   

	

	    ImageIcon im4 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/coming soon.png");
	    ImageIcon im5 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/equipment.png");
	    im5.setImage(im5.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    ImageIcon im6 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/procedure.png");
	    im6.setImage(im6.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    ImageIcon im7 = new ImageIcon("src/org/clothocad/tool/TTECONCLOTHO/solutions.png");
	    im7.setImage(im7.getImage().getScaledInstance(200,50,Image.SCALE_DEFAULT));
	    
	    JPanel Protocol=new JPanel();
	    Protocol.setBackground(Color.white);
	    Protocol.setLayout(null);
	    tabs.addTab(Names[1],Protocol);

	    if (Data.num == 74){ 
    	
	    	JLabel EQ = new JLabel(im5);
		    EQ.setBounds(20, 20, 200, 50);
		    Protocol.add(EQ);
	
		   
		    JTextArea jt2 = new JTextArea(); 
		    jt2.setFont(new Font("",Font.ITALIC,15));
		    jt2.setBounds(250,70,200,50);
		    jt2.setLineWrap(true);
		    jt2.setText(" " + Data.equipment);
		    jt2.setWrapStyleWord(true);
		    JScrollPane js1 = new JScrollPane(jt2);
		    jt2.setFont(new Font("",Font.ITALIC,17));
		    Protocol.add(js1);
		    js1.setBounds(250, 70, 500, 100);
		    js1.setBorder(BorderFactory.createEmptyBorder());
		    
		     JLabel PR = new JLabel(im6);
			 PR.setBounds(20, 190, 200, 50);
			 Protocol.add(PR);
		     JTextArea jt3 = new JTextArea(); 
			 jt3.setFont(new Font("",Font.ITALIC,15));
		     jt3.setBounds(250,70,200,50);
		     jt3.setLineWrap(true);
			    jt3.setText(" " + Data.procedure);
			    jt3.setWrapStyleWord(true);
			    JScrollPane js2 = new JScrollPane(jt3);
			    jt3.setFont(new Font("",Font.ITALIC,17));
			    Protocol.add(js2);
			    js2.setBounds(250, 240, 500, 100);
			    js2.setBorder(BorderFactory.createEmptyBorder());
		        Protocol.add(new JLabel(Data.procedure));
	   
	    	    JLabel SL = new JLabel(im7);
	    	    Protocol.add(SL);
			    SL.setBounds(20,360,200,50);
	    	    JTextArea jt4 = new JTextArea(); 
				jt4.setFont(new Font("",Font.ITALIC,15));
			    jt4.setBounds(20,370,200,50);
			    jt4.setLineWrap(true);
		        jt4.setText(" " + Data.solutions);
			    jt4.setWrapStyleWord(true);
			    JScrollPane js3 = new JScrollPane(jt4);
			    jt4.setFont(new Font("",Font.ITALIC,17));
			    Protocol.add(js3);
			    js3.setBounds(250, 410, 500, 100);
			    js3.setBorder(BorderFactory.createEmptyBorder());
		        Protocol.add(new JLabel(Data.procedure));
		        Protocol.add(label2);
	    }
	    else{
	    	Protocol.setLayout(new BorderLayout());
		    JLabel CS2 = new JLabel(im8);
		    Protocol.add(CS2);
	    }
	    
	    
	    JPanel Comment=new JPanel();
	    Comment.setLayout(null);
	    JLabel CS = new JLabel(im8);
	    Comment.add(CS);
	    Comment.setBackground(Color.white);
	    tabs.addTab(Names[2],Comment);
	    CS.setBounds(0, 480, 800, 118);
	   
		
	    JPanel Circuit=new JPanel();
	    Circuit.setLayout(null);
	    Circuit.setBackground(Color.white);
	    JLabel CS1 = new JLabel(im8);
		Circuit.add(CS1);
	    tabs.addTab(Names[3],Circuit);
	    CS1.setBounds(0, 480, 800, 118);
	    
	    JPanel Close=new JPanel();
	    
	    Comment.setBackground(Color.white);
	    tabs.addTab(Names[4],Close);
	    

	    
	    tabs.addChangeListener(new ChangeListener() {
	      public void stateChanged(ChangeEvent e) {
	    	  
	          if((tabs.getSelectedIndex())==4){
	  	    	
	           dispose();
	          }	
	            }
	    });
	    
	    Container contentPane = getContentPane();
 
	    
	   //contentPane.add(BorderLayout.SOUTH, txt);
	    contentPane.add(tabs);

        tabs.setFont(new Font("",Font.CENTER_BASELINE,15));
        tabs.setForeground(new Color(120,120,120));
	    tabs.setUI(new SinaTabbedPaneUI());

//	    setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	    pack();
	    this.setSize(800, 670);
	    
	    setVisible(true);
        this.setResizable(false);
        this.setLocation(100,0);

	    
	  }

	  public static void main(String[] args) {
	     new TabbedPaneDemo();
	  }
	}