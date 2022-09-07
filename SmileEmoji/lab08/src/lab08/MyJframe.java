/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lab08;

/**
 *
 * @author user
 */
import java.awt.Color;
import javax.swing.JFrame;
import javax.swing.JPanel;
import java.awt.Graphics;
import java.awt.FlowLayout;
import javax.swing.JButton;
import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
public class MyJframe extends JFrame {
    
    Drwpanel panel = new Drwpanel();
    JButton but = new JButton("Smile");
    Color red ;
    Color red2;
    public MyJframe(){
        super("Emoji");
        panel.setSize(150, 150);
        red2=Color.RED;
        but.addActionListener(new ActionListener(){
                
            public void actionPerformed(ActionEvent e){
              
                   red = Color.RED;
                   red2=null;
                repaint();
            }
        });
        panel.add(but);
        add(panel);
    }
    public class Drwpanel extends JPanel{
        public void paintComponent(Graphics g){
            super.paintComponent(g);
            g.setColor(Color.YELLOW);
            g.fillOval(50,60,150, 150);
            
            g.setColor(Color.BLACK);
            g.fillOval(90,90, 25, 25);
            g.fillOval(135, 90, 25, 25);
            
            if(red2!=null){
                g.setColor(Color.red);
                g.drawLine(100,150,150, 150);
            }
            
            
             if(red!=null){
                  g.setColor(Color.red);
                 g.drawArc(84, 80, 80, 80, 220, 95);
             }
           
            
        }
        
    }
    
}
