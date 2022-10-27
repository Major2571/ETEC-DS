package atividadeCalculadora;

public class atividadeCalculadora extends javax.swing.JFrame {

    public atividadeCalculadora() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        n1 = new javax.swing.JTextField();
        n2 = new javax.swing.JTextField();
        res = new javax.swing.JTextField();
        soma = new javax.swing.JButton();
        subtracao = new javax.swing.JButton();
        multiplicacao = new javax.swing.JButton();
        divisao = new javax.swing.JButton();
        limpar = new javax.swing.JButton();
        sair = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jPanel1.setBackground(new java.awt.Color(91, 91, 91));
        jPanel1.setForeground(new java.awt.Color(102, 102, 102));

        n1.setBackground(new java.awt.Color(204, 204, 204));
        n1.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        n1.setHorizontalAlignment(javax.swing.JTextField.CENTER);
        n1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                n1ActionPerformed(evt);
            }
        });

        n2.setBackground(new java.awt.Color(204, 204, 204));
        n2.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        n2.setHorizontalAlignment(javax.swing.JTextField.CENTER);

        res.setEditable(false);
        res.setBackground(new java.awt.Color(204, 204, 204));
        res.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        res.setHorizontalAlignment(javax.swing.JTextField.CENTER);

        soma.setBackground(new java.awt.Color(102, 102, 102));
        soma.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        soma.setForeground(new java.awt.Color(255, 255, 255));
        soma.setText("+");
        soma.setAlignmentY(0.0F);
        soma.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                somaActionPerformed(evt);
            }
        });

        subtracao.setBackground(new java.awt.Color(102, 102, 102));
        subtracao.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        subtracao.setForeground(new java.awt.Color(255, 255, 255));
        subtracao.setText("-");
        subtracao.setToolTipText("");
        subtracao.setAlignmentY(0.0F);
        subtracao.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                subtracaoActionPerformed(evt);
            }
        });

        multiplicacao.setBackground(new java.awt.Color(102, 102, 102));
        multiplicacao.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        multiplicacao.setForeground(new java.awt.Color(255, 255, 255));
        multiplicacao.setText("*");
        multiplicacao.setAlignmentY(0.0F);
        multiplicacao.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                multiplicacaoActionPerformed(evt);
            }
        });

        divisao.setBackground(new java.awt.Color(102, 102, 102));
        divisao.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        divisao.setForeground(new java.awt.Color(255, 255, 255));
        divisao.setText("/");
        divisao.setAlignmentY(0.0F);
        divisao.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                divisaoActionPerformed(evt);
            }
        });

        limpar.setBackground(new java.awt.Color(102, 102, 102));
        limpar.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        limpar.setForeground(new java.awt.Color(255, 255, 255));
        limpar.setText("Limpar");
        limpar.setAlignmentY(0.0F);
        limpar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                limparActionPerformed(evt);
            }
        });

        sair.setBackground(new java.awt.Color(102, 102, 102));
        sair.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        sair.setForeground(new java.awt.Color(255, 255, 255));
        sair.setText("Sair");
        sair.setAlignmentY(0.0F);
        sair.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                sairActionPerformed(evt);
            }
        });

        jLabel1.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(255, 255, 255));
        jLabel1.setText("Número 1");

        jLabel2.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(255, 255, 255));
        jLabel2.setText("Número 2");

        jLabel3.setFont(new java.awt.Font("Century Gothic", 0, 16)); // NOI18N
        jLabel3.setForeground(new java.awt.Color(255, 255, 255));
        jLabel3.setText("Resultado");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(88, 88, 88)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(limpar, javax.swing.GroupLayout.PREFERRED_SIZE, 130, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(sair, javax.swing.GroupLayout.PREFERRED_SIZE, 130, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addGap(15, 15, 15)
                        .addComponent(n1, javax.swing.GroupLayout.PREFERRED_SIZE, 185, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel2)
                        .addGap(15, 15, 15)
                        .addComponent(n2, javax.swing.GroupLayout.PREFERRED_SIZE, 185, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel3)
                        .addGap(12, 12, 12)
                        .addComponent(res, javax.swing.GroupLayout.PREFERRED_SIZE, 185, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(soma, javax.swing.GroupLayout.PREFERRED_SIZE, 62, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(subtracao, javax.swing.GroupLayout.PREFERRED_SIZE, 62, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(divisao, javax.swing.GroupLayout.PREFERRED_SIZE, 62, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(multiplicacao, javax.swing.GroupLayout.PREFERRED_SIZE, 62, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(99, Short.MAX_VALUE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(46, 46, 46)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(n1, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel1))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(n2, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel2))
                .addGap(30, 30, 30)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(res, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel3))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE, false)
                    .addComponent(soma, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(subtracao, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(divisao, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(multiplicacao, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(limpar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(sair, javax.swing.GroupLayout.PREFERRED_SIZE, 38, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(78, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 462, Short.MAX_VALUE)
            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(layout.createSequentialGroup()
                    .addGap(0, 0, Short.MAX_VALUE)
                    .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGap(0, 0, Short.MAX_VALUE)))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 384, Short.MAX_VALUE)
            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(layout.createSequentialGroup()
                    .addGap(0, 0, Short.MAX_VALUE)
                    .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGap(0, 0, Short.MAX_VALUE)))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void n1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_n1ActionPerformed

    }//GEN-LAST:event_n1ActionPerformed

    private void somaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_somaActionPerformed
        int x, y, z;
        String r;

        x = Integer.parseInt(n1.getText());
        y = Integer.parseInt(n2.getText());

        z = x + y;
        r = String.valueOf(z);
        res.setText(r);
    }//GEN-LAST:event_somaActionPerformed

    private void subtracaoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_subtracaoActionPerformed
        int x, y, z;
        String r;

        x = Integer.parseInt(n1.getText());
        y = Integer.parseInt(n2.getText());

        z = x - y;
        r = String.valueOf(z);
        res.setText(r);
    }//GEN-LAST:event_subtracaoActionPerformed

    private void multiplicacaoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_multiplicacaoActionPerformed
        int x, y, z;
        String r;

        x = Integer.parseInt(n1.getText());
        y = Integer.parseInt(n2.getText());

        z = x * y;
        r = String.valueOf(z);
        res.setText(r);
    }//GEN-LAST:event_multiplicacaoActionPerformed

    private void divisaoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_divisaoActionPerformed
        int x, y, z;
        String r;

        x = Integer.parseInt(n1.getText());
        y = Integer.parseInt(n2.getText());

        z = x / y;
        r = String.valueOf(z);
        res.setText(r);
    }//GEN-LAST:event_divisaoActionPerformed

    private void limparActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_limparActionPerformed
        n1.setText("");
        n2.setText("");
        res.setText("");
    }//GEN-LAST:event_limparActionPerformed

    private void sairActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_sairActionPerformed
        System.exit(0);
    }//GEN-LAST:event_sairActionPerformed

    public static void main(String args[]) {
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(atividadeCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(atividadeCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(atividadeCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(atividadeCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }

        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new atividadeCalculadora().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton divisao;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JButton limpar;
    private javax.swing.JButton multiplicacao;
    private javax.swing.JTextField n1;
    private javax.swing.JTextField n2;
    private javax.swing.JTextField res;
    private javax.swing.JButton sair;
    private javax.swing.JButton soma;
    private javax.swing.JButton subtracao;
    // End of variables declaration//GEN-END:variables
}
