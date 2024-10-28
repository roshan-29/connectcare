import java.util.*;
class Multithreading_Random extends Thread{
    private int n;
    public Multithreading_Random(int n){
        this.n=n;

    }
public void run(){
    int i=1;
    System.out.println("Thread"+Thread.currentThread()getId()+"is running");
   while(I<this.n){
    try{
        Thread,sleep(1000):
        double d=Math.random()*100;
System.out.println((int)d);
i++;
    }catch(Exception e){
    }
   } 
}
}
class Multithreading_Square implements RunnableP{
    private int c;
    public Multithreading_Cube(int c){
        this.c=c;
    }public void run(){
        //displying the thread that is running
        System.out.println("Thread"+Thread.currentThread().getId+"is running");
         System.out.println("square of"+this.c+"is"+(this.c*this.c*this .c));

    }
}
class Multithreading_Square implements Runnable{
    privet int s:
    public Multithreading_Square(int s) {
        this.s=s;

    }
 public void run(){
    //displaying the thread that is ryunning
System.out.println("Thread"+Thread.currentThread()getId+"is running");
System.out.println("square of"+this.s+"is"+(this.s*thisws.s)):
 }
}
public class Lab8{
    public static void main(String[]args){
        //TODO auto- generated stub
        Scanner in=new Scanner(sysstem.in);
        System.out.println("Enter n-to random tp be genearted");
        int n=in.nextInt();

        System.out.println("Enter s-to find square");
        int s=in.nextInt();
        System.out.println("Enter n-to find square");
        int c=in.nextInt();

        Multithreading_Random random=new Multithreading_Cube(s);
        random.start();

        Multithreading_Cube runnableS=new Multithreading_Cube(s);
        ThreadthreadC=new Thread(runnableS);
        threadC.start();
        
        Multithreading_Square runnableC=new Multithreading_Square(c);
        Thread threads=new Thread(runnableC);
        threadS.start();


    }
}