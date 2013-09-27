package org.clothocad.tool.TTECONCLOTHO;

import java.sql.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;

import javax.swing.*;
import javax.swing.event.TableModelListener;
import javax.swing.table.AbstractTableModel;
import javax.swing.table.JTableHeader;
import javax.swing.table.TableCellRenderer;
import javax.swing.table.TableColumn;
import org.openide.windows.TopComponent;
import org.openide.windows.WindowManager;
import javax.swing.table.TableModel;




public class Index extends TopComponent{

	public JTable table;
	String[] columnNames;
	Object[][] rowData;
        JButton jb;
        JPanel jp;
	int count=0;
  
	  
	  public Index(){
       
        JPanel jp = new JPanel();
		
        jp.setLayout(null);
        jp.setBackground(Color.black);
        this.setBackground(Color.black);
       
		String[] columnNames = {"Project ID","Project Name", "Evidence level"};

		Object[][] rowData = new Object[77][3];
	      
	    table = new JTable(rowData,columnNames);
	    for(int ii=0;ii<=75;ii++ ){
	    table.setValueAt(Data.Ecoid[ii], ii, 0);
		table.setValueAt(Data.ProjectName[ii], ii, 1);
		table.setValueAt(Data.Description[ii], ii, 2);
	    
	    }

	    TableColumn col1 = table.getColumnModel().getColumn(0);
	    TableColumn col2 = table.getColumnModel().getColumn(1);
	    TableColumn col3 = table.getColumnModel().getColumn(2);
	    col1.setPreferredWidth(100);
	    col2.setPreferredWidth(230);
	    col3.setPreferredWidth(450);
	    
	    table.setDefaultRenderer(Object.class, new TableCellTextAreaRenderer());
		 
	    table.addMouseListener(new Select());
	    table.setGridColor(Color.yellow);
		//表格线颜色..
	    table.setBackground(Color.LIGHT_GRAY);
		table.setSelectionBackground(Color.YELLOW);
		//背景颜色
//		table.setShowVerticalLines(false);
        table.setEnabled(false);
        table.setVisible(true);
        table.setToolTipText("further information");
		table.setForeground(Color.black);
		table.setFont(new Font("Arial",Font.PLAIN,15));
	    JTableHeader tableH = table.getTableHeader();
	    tableH.setBackground(Color.yellow);
	    tableH.setReorderingAllowed(true);
	
	    
	    JScrollPane js = new JScrollPane(table);
		jp.add(js);
		js.setBounds(0, 0, 780, 540);
		js.setBackground(new Color(240,240,240));
		
		this.add(js);

		this.setSize(780, 560);
		this.setVisible(true);
		this.setLocation(0, 0);
                this.setDisplayName("Circuits List");
	  }
class Select implements MouseListener{

			public void mouseClicked(MouseEvent e) {
  
                         Point mousepoint=e.getPoint();
			 int i = table.rowAtPoint(mousepoint);
		         Data.num = i;
                         TabbedPaneDemo tabbedPaneDemo = new TabbedPaneDemo();
			    
		    }

			@Override
			public void mousePressed(MouseEvent e) {
				// TODO Auto-generated method stub
				
			}

			@Override
			public void mouseReleased(MouseEvent e) {
				// TODO Auto-generated method stub
				
			}

			@Override
			public void mouseEntered(MouseEvent e) {
				// TODO Auto-generated method stub
				
				
				}
			

			@Override
			public void mouseExited(MouseEvent e) {
				// TODO Auto-generated method stub
				
				
			}
			}
	  
	  
	  }

class TableCellTextAreaRenderer extends JTextArea implements TableCellRenderer { 
public TableCellTextAreaRenderer() { 
setLineWrap(true); 
setWrapStyleWord(true); 
this.setBorder(BorderFactory.createEmptyBorder(1, 1, 0, 0));
}

@Override
public Component getTableCellRendererComponent(JTable table, Object value,
		boolean isSelected, boolean hasFocus, int row, int column) {
	// TODO Auto-generated method stub
	int maxPreferredHeight = 200; 
	 
	   setText("" + table.getValueAt(row, 2)); 
	   setSize(table.getColumnModel().getColumn(column).getWidth(), 0); 
	   maxPreferredHeight = Math.min(maxPreferredHeight, getPreferredSize().height); 
	  if(maxPreferredHeight<50){
		  maxPreferredHeight = 50;
	  }

	  if(table.getRowHeight(row) != maxPreferredHeight) 

	  { 
	   table.setRowHeight(row, maxPreferredHeight); 
	  } 
	  
	  
	  if(isSelected) 
	  { 
	   this.setBackground(table.getSelectionBackground());
	   
	  } 
	  else 
	  { 
	   this.setBackground(table.getBackground());     
	  } 

	  setText(value == null ? "" : value.toString()); 
	  return this; 
} 
}



