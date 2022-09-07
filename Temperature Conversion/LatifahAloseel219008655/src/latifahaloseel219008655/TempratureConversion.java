/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package latifahaloseel219008655;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JRadioButton;
import javax.swing.ButtonGroup;
import java.awt.GridLayout;
import javax.swing.JPanel;
import java.awt.FlowLayout;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
/**
 *
 * @author user
 */
public class TempratureConversion extends JFrame implements ItemListener{
    
    JLabel labl1 = new JLabel("Convert from");
    JLabel labl2 = new JLabel("Enter Numeric Temperature");
    JLabel labl3 = new JLabel("Convert To");
    JLabel labl4 = new JLabel("Comparable Temperature is");
    JTextField text1 = new JTextField(25);
    JTextField text2 = new JTextField(25);
    JRadioButton rad1 = new JRadioButton("Fahrenheit");
    JRadioButton rad2 = new JRadioButton("Celcius");
    JRadioButton rad3 = new JRadioButton("Kelvin");
    JRadioButton rad4 = new JRadioButton("Fahrenheit");
    JRadioButton rad5 = new JRadioButton("Celcius");
    JRadioButton rad6 = new JRadioButton("Kelvin");
    ButtonGroup grop1 = new ButtonGroup();
    ButtonGroup grop2 = new ButtonGroup();
    JPanel panl1 = new JPanel();
    JPanel panl2 = new JPanel();
    JPanel panl3 = new JPanel();
    JPanel panl4 = new JPanel();
    JPanel panl5 = new JPanel();
    JPanel panl6 = new JPanel();
    JPanel panl7 = new JPanel();
    JPanel panl8 = new JPanel();
    public TempratureConversion(){
        super("Temperature Conversion");
        setLayout(new GridLayout(8,1));
        panl1.add(labl1,new FlowLayout());
        grop1.add(rad1);
        grop1.add(rad2);
        grop1.add(rad3);
        panl2.add(rad1, new FlowLayout());
        panl2.add(rad2, new FlowLayout());
        panl2.add(rad3, new FlowLayout());
        panl3.add(labl2,new FlowLayout());
        panl4.add(text1,new FlowLayout());
        panl5.add(labl3,new FlowLayout());
        grop2.add(rad4);
        grop2.add(rad5);
        grop2.add(rad6);
        panl6.add(rad4, new FlowLayout());
        panl6.add(rad5, new FlowLayout());
        panl6.add(rad6, new FlowLayout());
        panl7.add(labl4,new FlowLayout());
        panl8.add(text2,new FlowLayout());
        add(panl1);
        add(panl2);
        add(panl3);
        add(panl4);
        add(panl5);
        add(panl6);
        add(panl7);
        add(panl8);
        rad4.addItemListener(this);
        rad5.addItemListener(this);
        rad6.addItemListener(this);
    }
    public void itemStateChanged(ItemEvent e){
        double num =Double.parseDouble(text1.getText());
        double result;
        if(rad1.isSelected() && rad4.isSelected()){
            text2.setText(text1.getText());
        }
        if(rad1.isSelected() && rad5.isSelected()){
            result = (5.0/9.0)*(num-32.0); 
            text2.setText(Double.toString(result));
        }
        if(rad2.isSelected() && rad4.isSelected()){
            result = (9.0/5.0)*num+32.0; 
            text2.setText(Double.toString(result));
        }
        if(rad2.isSelected() && rad5.isSelected()){
            text2.setText(text1.getText());
        }
        if(rad2.isSelected() && rad6.isSelected()){
            result = num + 273.15; 
            text2.setText(Double.toString(result));
        }
        if(rad3.isSelected() && rad6.isSelected()){
            text2.setText(text1.getText());
        }
        if(rad3.isSelected() && rad5.isSelected()){
            result = num - 273.15; 
            text2.setText(Double.toString(result));
        }
    }
    
}
