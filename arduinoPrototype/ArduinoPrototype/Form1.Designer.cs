namespace ArduinoPrototype
{
    partial class visualizedPanel
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.latitudeLabel = new System.Windows.Forms.Label();
            this.longitudeLabel = new System.Windows.Forms.Label();
            this.timer = new System.Windows.Forms.Timer(this.components);
            this.attemptLabel = new System.Windows.Forms.Label();
            this.attemptLabel_Value = new System.Windows.Forms.Label();
            this.latitudeLabel_Value = new System.Windows.Forms.Label();
            this.longitudeLabel_Value = new System.Windows.Forms.Label();
            this.headerLabel = new System.Windows.Forms.Label();
            this.googleLink = new System.Windows.Forms.LinkLabel();
            this.SuspendLayout();
            // 
            // latitudeLabel
            // 
            this.latitudeLabel.AutoSize = true;
            this.latitudeLabel.Font = new System.Drawing.Font("Consolas", 12F);
            this.latitudeLabel.Location = new System.Drawing.Point(13, 138);
            this.latitudeLabel.Name = "latitudeLabel";
            this.latitudeLabel.Size = new System.Drawing.Size(81, 19);
            this.latitudeLabel.TabIndex = 0;
            this.latitudeLabel.Text = "Enlem : ";
            // 
            // longitudeLabel
            // 
            this.longitudeLabel.AutoSize = true;
            this.longitudeLabel.Font = new System.Drawing.Font("Consolas", 12F);
            this.longitudeLabel.Location = new System.Drawing.Point(13, 172);
            this.longitudeLabel.Name = "longitudeLabel";
            this.longitudeLabel.Size = new System.Drawing.Size(90, 19);
            this.longitudeLabel.TabIndex = 1;
            this.longitudeLabel.Text = "Boylam : ";
            // 
            // timer
            // 
            this.timer.Tick += new System.EventHandler(this.timer_Tick);
            // 
            // attemptLabel
            // 
            this.attemptLabel.AutoSize = true;
            this.attemptLabel.Font = new System.Drawing.Font("Consolas", 12F);
            this.attemptLabel.Location = new System.Drawing.Point(13, 100);
            this.attemptLabel.Name = "attemptLabel";
            this.attemptLabel.Size = new System.Drawing.Size(99, 19);
            this.attemptLabel.TabIndex = 2;
            this.attemptLabel.Text = "Attempt : ";
            // 
            // attemptLabel_Value
            // 
            this.attemptLabel_Value.AutoSize = true;
            this.attemptLabel_Value.Font = new System.Drawing.Font("Consolas", 12F);
            this.attemptLabel_Value.Location = new System.Drawing.Point(118, 100);
            this.attemptLabel_Value.Name = "attemptLabel_Value";
            this.attemptLabel_Value.Size = new System.Drawing.Size(0, 19);
            this.attemptLabel_Value.TabIndex = 3;
            // 
            // latitudeLabel_Value
            // 
            this.latitudeLabel_Value.AutoSize = true;
            this.latitudeLabel_Value.Font = new System.Drawing.Font("Consolas", 12F);
            this.latitudeLabel_Value.Location = new System.Drawing.Point(118, 138);
            this.latitudeLabel_Value.Name = "latitudeLabel_Value";
            this.latitudeLabel_Value.Size = new System.Drawing.Size(0, 19);
            this.latitudeLabel_Value.TabIndex = 4;
            // 
            // longitudeLabel_Value
            // 
            this.longitudeLabel_Value.AutoSize = true;
            this.longitudeLabel_Value.Font = new System.Drawing.Font("Consolas", 12F);
            this.longitudeLabel_Value.Location = new System.Drawing.Point(118, 172);
            this.longitudeLabel_Value.Name = "longitudeLabel_Value";
            this.longitudeLabel_Value.Size = new System.Drawing.Size(0, 19);
            this.longitudeLabel_Value.TabIndex = 5;
            // 
            // headerLabel
            // 
            this.headerLabel.AutoSize = true;
            this.headerLabel.Font = new System.Drawing.Font("Consolas", 16F);
            this.headerLabel.Location = new System.Drawing.Point(12, 9);
            this.headerLabel.Name = "headerLabel";
            this.headerLabel.Size = new System.Drawing.Size(432, 26);
            this.headerLabel.TabIndex = 6;
            this.headerLabel.Text = "Yıldız Takip Sistemi - Görsel Panel";
            // 
            // googleLink
            // 
            this.googleLink.AutoSize = true;
            this.googleLink.Font = new System.Drawing.Font("Consolas", 10F);
            this.googleLink.Location = new System.Drawing.Point(14, 418);
            this.googleLink.Name = "googleLink";
            this.googleLink.Size = new System.Drawing.Size(136, 17);
            this.googleLink.TabIndex = 8;
            this.googleLink.TabStop = true;
            this.googleLink.Text = "Wait for values.";
            this.googleLink.LinkClicked += new System.Windows.Forms.LinkLabelLinkClickedEventHandler(this.googleLink_LinkClicked);
            // 
            // visualizedPanel
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.googleLink);
            this.Controls.Add(this.headerLabel);
            this.Controls.Add(this.longitudeLabel_Value);
            this.Controls.Add(this.latitudeLabel_Value);
            this.Controls.Add(this.attemptLabel_Value);
            this.Controls.Add(this.attemptLabel);
            this.Controls.Add(this.longitudeLabel);
            this.Controls.Add(this.latitudeLabel);
            this.Name = "visualizedPanel";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Arduino Görsel Panel";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.visualizedPanel_FormClosing);
            this.Load += new System.EventHandler(this.visualizedPanel_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label latitudeLabel;
        private System.Windows.Forms.Label longitudeLabel;
        private System.Windows.Forms.Timer timer;
        private System.Windows.Forms.Label attemptLabel;
        private System.Windows.Forms.Label attemptLabel_Value;
        private System.Windows.Forms.Label latitudeLabel_Value;
        private System.Windows.Forms.Label longitudeLabel_Value;
        private System.Windows.Forms.Label headerLabel;
        private System.Windows.Forms.LinkLabel googleLink;
    }
}

