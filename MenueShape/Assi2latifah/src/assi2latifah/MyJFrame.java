/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assi2latifah;

import java.awt.Color;
import javax.swing.JFrame;
import javax.swing.JPanel;
import java.awt.Graphics;
import javax.swing.JTextField;
import java.awt.Color;
import java.awt.event.ItemListener;
import java.awt.event.ItemEvent;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JRadioButtonMenuItem;
import javax.swing.ButtonGroup;
public class MyJFrame extends JFrame implements ItemListener,ActionListener{
    Color[] color = {Color.RED,Color.GREEN,Color.BLUE,Color.BLACK,Color.YELLOW};
    String[] colors={"Red","Green","Blue","Black","Yellow"};
    JRadioButtonMenuItem[] coloritem = new JRadioButtonMenuItem[colors.length];
    String[] shape = {"Line","Filled Rectangle", "Rectangle" , "Filled Ovel", "Oval"};
    JRadioButtonMenuItem[] shapeitem = new JRadioButtonMenuItem[shape.length];
    JMenu colormenu = new JMenu("Color");
    JMenu shapemenu = new JMenu("Shape");
    JMenuBar bar = new JMenuBar();
    JTextField txt1 = new JTextField("Width",10);
    JTextField txt2 = new JTextField("highest",10);
    ButtonGroup gup1 = new ButtonGroup();
    ButtonGroup gup2 = new ButtonGroup();
    Drwpanel panel = new Drwpanel();
    Color slec;
    int sh1 = 0;
    int sh2 =0;
    int sh3=0;
    int sh4=0;
    int sh5=0;
    int num1=50;
    int num2=40;
    public MyJFrame(){
        super("Menue");
        for(int i=0; i<colors.length;i++){
            coloritem[i] = new JRadioButtonMenuItem(colors[i]);
            colormenu.add(coloritem[i]);
            gup1.add(coloritem[i]);
            coloritem[i].addItemListener(this);
        }
        for(int i=0; i<shape.length;i++){
            shapeitem[i] = new JRadioButtonMenuItem(shape[i]);
            shapemenu.add(shapeitem[i]);
            gup2.add(shapeitem[i]);
            shapeitem[i].addItemListener(this);
        }
        txt1.addActionListener(this);
        txt2.addActionListener(this);
        setJMenuBar(bar);
        bar.add(colormenu);
        bar.add(shapemenu);
        panel.setSize(200, 200);
        panel.add(txt1);
        panel.add(txt2);
        add(panel);
    }
    public void itemStateChanged(ItemEvent e){
            for(int i=0;i<coloritem.length;i++){
                if(coloritem[i].isSelected()){
                    slec = color[i];
                }
            }
            if(shapeitem[0].isSelected()){
                sh1 = 2;
                sh2=0;
                sh3=0;
                sh4=0;
                sh5=0;
            }
            else if(shapeitem[1].isSelected()){
                sh2 = 2;
                sh1=0;
                sh3=0;
                sh4=0;
                sh5=0;
            }
            else if(shapeitem[2].isSelected()){
                sh3 = 2;
                sh2=0;
                sh1=0;
                sh4=0;
                sh5=0;
            }
            else if(shapeitem[3].isSelected()){
                sh4 = 2;
                sh2=0;
                sh3=0;
                sh1=0;
                sh5=0;
            }
            else if(shapeitem[4].isSelected()){
                sh5 = 2;
                sh2=0;
                sh3=0;
                sh4=0;
                sh1=0;
            }
            repaint();
    }
    public void actionPerformed(ActionEvent e){
        if(e.getSource()==txt1){
            num1= Integer.parseInt(txt1.getText());
        }
        else if(e.getSource()==txt2){
            num1= Integer.parseInt(txt1.getText());
            num2 = Integer.parseInt(txt2.getText());
        }
        repaint();
    }
    public class Drwpanel extends JPanel{
        public void paintComponent(Graphics g){
            super.paintComponent(g);
             if(slec!=null){
                  g.setColor(slec);
             }
             if(sh1!=0){
                 g.drawLine(200, 90, 300, 90);
             }
             if(sh2!=0){
                 g.fillRect(200, 90, num1, num2);
             }
             if(sh3!=0){
                 g.drawRect(200, 90, num1, num2);
             }
             if(sh4!=0){
                 g.fillOval(200, 90, num1, num2);
             }
             if(sh5!=0){
                 g.drawOval(200, 90, num1, num2);
             }
        }
    } 
    
    
}
